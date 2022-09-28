function animate(element, styles = {}, duration, callback = () => {}) {
  let startAnimation;
  const currentStyles = {};

  for (const prop in styles) {
    if (Object.hasOwnProperty.call(styles, prop)) {
      currentStyles[prop] = parseFloat(
        window.getComputedStyle(element)[prop]
      );
    }
  }

  const step = (time) => {
    if (!startAnimation) {
      startAnimation = time;
    }

    let progress = (time - startAnimation) / duration;

    for (const prop in styles) {
      if (Object.hasOwnProperty.call(styles, prop)) {
        const value = styles[prop];
        element.style[prop] =
          currentStyles[prop] + (value - currentStyles[prop]) * progress;
      }
    }

    if (progress < 1) {
      return window.requestAnimationFrame(step);
    } else {
      callback();
    }
  };

  return window.requestAnimationFrame(step);
}

class Calendar {
  constructor(container, options = {}) {
    this.containerNode =
      container instanceof HTMLElement
        ? container
        : document.querySelector(container);
    if (!this.containerNode) return;
    this.options = {
      dateInput: '#date',
      theme: 'dark',
      ...options,
    };
    this._months = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December',
    ];
    this._today = new Date();
    this._monthOffset = 0;
    this._chosenDate = this._today;

    this._setCalendarHTML();
    this._setDate();

    console.log(this);
  }

  _setDate() {
    this._settedDate = new Date();
    this._settedDate.setMonth(new Date().getMonth() + this._monthOffset);
    this._month = this._settedDate.getMonth();
    this._day = this._settedDate.getDate();
    this._weekday = this._settedDate.getDay();
    this._year = this._settedDate.getFullYear();
    this._numberOfDays = new Date(this._year, this._month + 1, 0).getDate();
    this._firstDay = new Date(this._year, this._month, 1).getDay();
    this._lastDay = new Date(this._year, this._month + 1, 0).getDay();

    this._setMonthHTML();
    this._setArrayOfDays();
    this._setDaysHTML();
  }

  _setCalendarHTML() {
    const classes = ['wo-calendar'];

    if (this.options.theme === 'light') {
      classes.push('wo-calendar--light');
    }

    const classesString = classes.join(' ');

    this.containerNode.innerHTML = `<div class="${classesString}" data-type="calendar">
      <div class="wo-calendar__header">
        <button class="wo-calendar__button" data-type="prev">←</button>
        <div class="wo-calendar__month" data-type="month"></div>
        <button class="wo-calendar__button wo-calendar__button--right" data-type="next">→</button>
      </div>
      <div class="wo-calendar__body" data-type="body"></div>
    </div>`;
  }

  _setArrayOfDays() {
    this._arrayOfDays = [];
    const cellsCount =
      this._firstDay + this._numberOfDays + (6 - this._lastDay);
    let dayNum = 1;

    for (let index = 1; index < cellsCount; index++) {
      if (index < this._firstDay) {
        this._arrayOfDays.push('');
        continue;
      }

      if (dayNum > this._numberOfDays) {
        break;
      }

      this._arrayOfDays.push(new Date(this._year, this._month, dayNum));
      dayNum++;
    }
  }

  _formatDate(date) {
    const formattedMonth =
      date.getMonth() + 1 < 10
        ? `0${date.getMonth() + 1}`
        : (date.getMonth() + 1).toString();
    const formattedDay =
      date.getDate() < 10 ? `0${date.getDate()}` : date.getDate().toString();
    return `${date.getFullYear()}.${formattedMonth}.${formattedDay}`;
  }

  _setDaysHTML() {
    this.calendarBodyNode =
      this.containerNode.querySelector('[data-type="body"]');
    this.calendarBodyNode.innerHTML = this._arrayOfDays
      .map((day) => {
        if (day) {
          const classes = ['wo-day'];

          if (this._formatDate(day) === this._formatDate(this._today)) {
            classes.push('wo-day--today');
          }

          if (this._formatDate(day) === this._formatDate(this._chosenDate)) {
            classes.push('wo-day--selected');
          }
          return `<div class="${classes.join(
            ' '
          )}"><div class="wo-day__label">${day.getDate()}</div></div>`;
        } else {
          return '<div class="wo-day"></div>';
        }
      })
      .join('');
  }

  _setMonthHTML() {
    this.monthNode = this.containerNode.querySelector('[data-type="month"]');
    this.monthNode.textContent = this._months[this._month];
  }
}

// new Calendar(document.getElementById('calendar'));

class BechCalendar {
  constructor(containerId = '', options = {}) {
    this.containerNode = document.getElementById(containerId);
    if (!this.containerNode) {
      return console.warn('There is no element to insert into');
    }
    this.options = {
      parentElement: 'form',
      onlyCurrentMonth: true,
      inputSelector: '#date',
      theme: 'dark',
      callback: () => {
      },
      ...options,
    };

    this._months = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December',
    ];
    this._today = new Date();
    this._num = 0;
    this._chosenDate = this._today;

    this.containerNode.innerHTML = this._getCalendarHTML();
    this._setDate();

    this.Prev = new Date(this._year, this._month - 1, 1);
    if (this._month == 0) {
      this.Prev = new Date(this._year - 1, 11, 1);
    }
    this.Prev.Days = new Date(
      this.Prev.getFullYear(),
      this.Prev.getMonth() + 1,
      0
    ).getDate();

    this.Next = new Date(this._year, this._month + 1, 1);
    if (this._month == 11) {
      this.Next = new Date(this._year + 1, 0, 1);
    }
    this.Next.Days = new Date(
      this.Next.getFullYear(),
      this.Next.getMonth() + 1,
      0
    ).getDate();

    this._handleButtonClick = this._handleButtonClick.bind(this);
    this._handleBodyClick = this._handleBodyClick.bind(this);
    this._setEvents();
  }

  get chosenDate() {
    return this._chosenDate;
  }

  set chosenDate(dateString) {
    const dateParts = dateString.split('.');
    this._chosenDate = new Date(
      Number(dateParts[0]),
      Number(dateParts[1][1]),
      Number(dateParts[2])
    );
  }

  _setEvents() {
    this.buttonNodes = this.containerNode.querySelectorAll(
      '[data-type="prev"], [data-type="next"]'
    );

    this.buttonNodes.forEach((button) => {
      button.addEventListener('click', this._handleButtonClick);
    });

    this.calendarBody.addEventListener('click', this._handleBodyClick);
  }

  _setDate() {
    this._selectedDate = new Date();
    this._selectedDate.setMonth(new Date().getMonth() + this._num);
    this._month = this._selectedDate.getMonth();
    this._day = this._selectedDate.getDate();
    this._weekday = this._selectedDate.getDay();
    this._year = this._selectedDate.getFullYear();
    this.Days = new Date(this._year, this._month + 1, 0).getDate();
    this.FirstDay = new Date(this._year, this._month, 1).getDay();
    this.LastDay = new Date(this._year, this._month + 1, 0).getDay();

    this._setArrayDays();
    this._setMonthHTML();
    this._setLabelsHTML();
  }

  _handleButtonClick(event) {
    event.preventDefault();
    event.stopPropagation();
    const button = event.target.closest('button');
    const {type} = button.dataset;

    type === 'prev' ? this.prev() : this.next();
    this._setDate();
  }

  _handleBodyClick(event) {
    event.preventDefault();
    const dayNode = event.target.closest('[data-date]');

    if (!dayNode) return;

    const {date} = dayNode.dataset;
    const dateInput = document.querySelector(this.options.inputSelector);
    const dateNodes = this.calendarBody.querySelectorAll('[data-date]');

    dateInput.value = date;
    this.chosenDate = date;

    this.options.callback();

    dateNodes.forEach((node) => node.classList.remove('wo-day--selected'));
    dayNode.classList.add('wo-day--selected');
    dateInput.dispatchEvent(new Event('change'));
  }

  next() {
    this._num += 1;
  }

  prev() {
    this._num -= 1;
  }

  _setArrayDays() {
    this.arrayOfDays = [];
    const cellsCount = this.FirstDay + this.Days + (6 - this.LastDay);
    let dayNum = 1;

    for (let index = 1; index < cellsCount; index++) {
      if (index < this.FirstDay) {
        this.arrayOfDays.push('');
        continue;
      }

      if (dayNum > this.Days) {
        if (this.options.onlyCurrentMonth) {
          break;
        }

        dayNum = 1;
      }

      this.arrayOfDays.push(new Date(this._year, this._month, dayNum));
      dayNum++;
    }
  }

  _getFormattedDate(date) {
    const formattedMonth =
      date.getMonth() + 1 < 10
        ? `0${date.getMonth() + 1}`
        : (date.getMonth() + 1).toString();
    const formattedDay =
      date.getDate() < 10 ? `0${date.getDate()}` : date.getDate().toString();
    return `${date.getFullYear()}.${formattedMonth}.${formattedDay}`;
  }

  _setMonthHTML() {
    const monthNode = this.containerNode.querySelector('[data-type="month"]');
    monthNode.innerHTML = this._months[this._month];
  }

  _getCalendarHTML() {
    const classes = [];
    classes.push('wo-calendar');

    if (this.options.theme === 'light') {
      classes.push('wo-calendar--light');
    }

    return `<${this.options.parentElement} class="${classes.join(
      ' '
    )}" data-type="calendar">
      <div class="wo-calendar__header">
        <button class="wo-calendar__button" data-type="prev">←</button>
        <div class="wo-calendar__month" data-type="month"></div>
        <button class="wo-calendar__button wo-calendar__button--right" data-type="next">→</button>
      </div>
      <div class="wo-calendar__body" data-type="body"></div>
    </${this.options.parentElement}>`;
  }

  _setLabelsHTML() {
    this.calendarBody = this.containerNode.querySelector('[data-type="body"]');
    this.calendarBody.innerHTML = this.arrayOfDays
      .map((day) =>
        day
          ? `<div 
            class="wo-day ${
            this._getFormattedDate(day) ===
            this._getFormattedDate(this._today)
              ? 'wo-day--today'
              : ''
          } ${
            this._getFormattedDate(day) ===
            this._getFormattedDate(this._chosenDate)
              ? 'wo-day--selected'
              : ''
          }"
              data-date="${this._getFormattedDate(day)}"
            >
            <div class="wo-day__label">${day.getDate()}</div>
      
    </div>`
          : '<div class="wo-day"></div>'
      )
      .join('');
  }

  reset() {
    console.log('BechCalendar reset');
    this._num = 0;
    this._chosenDate = this._today;
    this._setDate();
  }
}

new BechCalendar('calendar', {
  parentElement: 'div',
  onlyCurrentMonth: true,
});

class UserCart {
  constructor(userData = {}) {
    this.cartButton = document.querySelector('.header-book-head-btn');
    this.cartContainerNode = document.querySelector('.cart-block_contant');
    this._orders = userData.order?.items || [];
    this._user = userData?.user || {};
    this._profileUrl = userData?.profile || '#';
    this._logoutUrl = 'https://tix.bechsteinhall.func.agency/en/logout/';
    this._loginUrl = 'https://tix.bechsteinhall.func.agency/en/login/';
    this._checkoutUrl = 'https://tix.bechsteinhall.func.agency/en/buyingflow/order/';

    this._init();
  }

  handleClick(event) {
    console.log(event);
    if (this._user?.name) {
      event.preventDefault();
      document.body.classList.toggle('opencart', !document.body.classList.contains('opencart'));
    }
  }

  setData(data = {}) {
    this._orders = data?.order?.items || [];
    this._user = data?.user || null;
    this._profileUrl = data?.profile || '#';
    this._setMarkup();
  }

  _setMarkup() {
    const links = this._user?.email
      ? `<div id="user-actions">
            <a href="${this._profileUrl}" class="p-17-25 card-block-a">View your account</a>
            <a href="${this._logoutUrl}" class="p-17-25 card-block-a">Log out</a>
         </div>`
      : `<div id="user-actions"><a href="${this._loginUrl}" class="p-17-25 card-block-a">Log in</a></div>`;

    const userNameHTML = this._user?.name
      ? `<div id="user-name">
              <div class="p-20-30 cart-block_top">Sir ${this._user.name}</div>
              <div class="cart-block_divider"></div>
          </div>`
      : '';

    const userCartHTML = this._user?.name
      ? `<div id="user-basket">
              <div class="p-17-25 card-block-txt">Your basket contains</div>
              <div class="p-20-30 cart-block-text">${this._orders.length} tickets</div>
              <div class="p-17-25 card-block-txt">for a total amount of</div>
              <div class="p-20-30">£ 340</div>
              <a bgline="1" href="${this._checkoutUrl}" class="header-book-head-btn-chk w-inline-block">
                  <div>checkout</div>
              </a>
              <div class="p-17-25 card-block-txt" data-cart="timer">10:28&nbsp;left to purchase</div>
              <div class="cart-block_divider"></div>
          </div>`
      : '';

    this.cartContainerNode.innerHTML = userNameHTML + userCartHTML + links;
  }

  _init() {
    this._setMarkup();

    this.handleClick = this.handleClick.bind(this);
    this.cartButton.addEventListener('click', this.handleClick);
  }
}

window.tixCart = new UserCart();

class WhatsOnSlider {
  constructor(data = []) {
    this._data = data;
    this.sliderContainerNode = document.querySelector('.wo-slider');

    if (!this.sliderContainerNode) {
      return;
    }

    this.sliderContainerNode.innerHTML = this._getMarkup();
    this.slideNodes = this.sliderContainerNode.querySelectorAll('.wo-slide');
    this._slideSize = this.slideNodes[0].getBoundingClientRect();
    this.prevButtonNode = document.querySelector('[data-button="prev"]');
    this.nextButtonNode = document.querySelector('[data-button="next"]');
    this._currentIndex = 0;

    this.setSlidesPosition();
    this.sliderContainerNode.classList.add('wo-slider--ready');

    this.handleScroll = this.handleScroll.bind(this);

    this.sliderContainerNode.addEventListener(
      'pointerdown',
      this.handleDown.bind(this)
    );

    document.addEventListener('pointerup', this.handleUp.bind(this));

    this.nextButtonNode?.addEventListener('click', this.next.bind(this));
    this.prevButtonNode?.addEventListener('click', this.prev.bind(this));
  }

  get currentIndex() {
    return this._currentIndex;
  }

  set currentIndex(val) {
    switch (true) {
      case val < 0:
        val = 0;
        break;
      case val >= this._data.length - 3:
        val = this._data.length - 3;
        break;
    }

    this._currentIndex = val;
    return this._currentIndex;
  }

  _getMarkup() {
    return this._data
      .map((item) => {
        if (item instanceof HTMLDivElement) {
          return item.outerHTML;
        } else {
          return `<div class="wo-slider_item wo-slide">${item.id}</div>`;
        }
      })
      .join('');
  }

  handleScroll(event) {
    const dragX = event.clientX;
    const x = (dragX - this.x) / this._slideSize.width;
    this.dragging(x);
  }

  handleDown(event) {
    this.startIndex = this.currentIndex;
    this.x = event.clientX;
    this.sliderContainerNode.addEventListener('pointermove', this.handleScroll);
    this.sliderContainerNode.classList.add('wo-slider--dragging');
  }

  handleUp(event) {
    this.sliderContainerNode.classList.remove('wo-slider--dragging');
    this.sliderContainerNode.removeEventListener(
      'pointermove',
      this.handleScroll
    );

    this.currentIndex = Math.round(this.currentIndex);
    this.setSlidesPosition();
  }

  dragging(x) {
    this.currentIndex = this.startIndex - x;
    console.log(this.currentIndex);
    this.setSlidesPosition();
  }

  next() {
    this.currentIndex = this.currentIndex + 1;
    this.setSlidesPosition();
  }

  prev() {
    this.currentIndex = this.currentIndex - 1;
    this.setSlidesPosition();
  }

  setSlidesPosition() {
    this.firstSlides = [];
    this.deckSlides = [];

    this.slideNodes.forEach((slide, index) => {
      if (index >= Math.ceil(this._currentIndex)) {
        this.firstSlides.push(slide);
      } else {
        this.deckSlides.unshift(slide);
      }
    });

    const diff = this.currentIndex - Math.ceil(this.currentIndex);

    this.firstSlides.forEach((slide, index) => {
      this.setSlideStyles(slide, {
        transform: `translate3d(${
          this._slideSize.width * (index - diff)
        }px, 0, 0)`,
        zIndex: '',
        opacity: '',
        pointerEvents: '',
      });
    });

    this.deckSlides.forEach((slide, index) => {
      if (index < 2) {
        this.setSlideStyles(slide, {
          pointerEvents: 'none',
          opacity: '',
          transform: `translate3d(-${
            this._slideSize.width * 0.05 * (index + 1 + diff)
          }px, 0, 0) scale(${1 - 0.05 * (index + 1 + diff)})`,
        });
      } else {
        this.setSlideStyles(slide, {
          zIndex: -(index + 1),
        });
      }
    });
  }

  setSlideStyles(slide, properties = {}) {
    for (const property in properties) {
      if (Object.hasOwnProperty.call(properties, property)) {
        const value = properties[property];
        slide.style[property] = value;
      }
    }
  }

  reset(data) {
    this.currentIndex = 0;
    this._data = data ? data : this._data;
    this.sliderContainerNode.innerHTML = this._getMarkup();
    this.slideNodes = this.sliderContainerNode.querySelectorAll('.wo-slide');
    console.log(this.slideNodes)
    this._slideSize = this.slideNodes[0].getBoundingClientRect();
    this.setSlidesPosition();
    this.sliderContainerNode.classList.add('wo-slider--ready');
  }
}

function debounce(callback, delay) {
  let timer;
  return function (...args) {
    clearTimeout(timer);
    timer = setTimeout(() => {
      callback.apply(this, args);
    }, delay);
  };
}

class CalendarWidget {
  constructor(input) {
    this.input = input;
    if (!this.input) return;
    this._setHTML();

    this.toggleCalendar = this.toggleCalendar.bind(this);
    this.reset = this.reset.bind(this);

    this._setEvents();
  }

  _setHTML() {
    this.widgetContainerNode = document.createElement('div');
    this.widgetContainerNode.className = 'calendar-btn w-inline-block';
    this.input.insertAdjacentElement('beforebegin', this.widgetContainerNode);
    this.widgetContainerNode.append(this.input);

    this.widgetResetButton = document.createElement('button');
    this.widgetResetButton.className = 'calendar-btn__reset';
    this.widgetResetButton.setAttribute('data-type', 'reset');
    this.widgetResetButton.textContent = '✕';
    this.input.insertAdjacentElement('afterend', this.widgetResetButton);

    this.widgetCloseNode = document.createElement('div');
    this.widgetCloseNode.className = 'calendar-btn__close';
    this.widgetCloseNode.textContent = 'Close';
    this.widgetResetButton.insertAdjacentElement(
      'afterend',
      this.widgetCloseNode
    );

    this.calendarContainerNode = document.createElement('div');
    this.calendarContainerNode.className = 'filter-calendar';
    this.calendarContainerNode.setAttribute('id', 'filter-calendar');
    this.widgetCloseNode.insertAdjacentElement(
      'afterend',
      this.calendarContainerNode
    );

    this.calendar = new BechCalendar(this.calendarContainerNode.id, {
      parentElement: 'div',
      onlyCurrentMonth: true,
      theme: 'light',
      inputSelector: `#${this.input.id}`,
      callback: () => {
        const value = this.input.value;
        const timeFilterButtons = document.querySelectorAll(
          '[name="time"]:not([type="text"])'
        );
        timeFilterButtons?.forEach((timeFilterButton) => {
          timeFilterButton.removeAttribute('checked');
          timeFilterButton.checked = false;
        });
        this.widgetContainerNode.classList.toggle(
          'calendar-btn--selected',
          !!value
        );
      },
    });
  }

  _setEvents() {
    this.widgetContainerNode.addEventListener('click', this.toggleCalendar);
    this.widgetResetButton.addEventListener('click', this.reset);
  }

  reset(event) {
    event?.preventDefault();
    event?.stopPropagation();
    this.input.value = '';
    this.input.dispatchEvent(new Event('change'));
    this.widgetContainerNode.classList.remove('calendar-btn--selected');
    this.calendar.reset();
  }

  toggleCalendar(event) {
    event.preventDefault();

    this.widgetContainerNode.classList.toggle(
      'calendar-btn--active',
      !this.widgetContainerNode.classList.contains('calendar-btn--active')
    );
  }
}

class VideoPlayer {
  constructor(playerNode) {
    this.playerNode = playerNode;
    if (!this.playerNode) {
      console.error('Player node is not defined')
      return;
    }
    this._video = this.playerNode.querySelector('video');
    this._soundButton = this.playerNode.querySelector('[data-type="sound"]');
    this._playButton = this.playerNode.querySelector('[data-type="play"]');
    this._progressBar = this.playerNode.querySelector('[data-type="progress-bar"]');
    this._progressLine = this.playerNode.querySelector('[data-type="progress-line"]');
    this._timeCounter = this.playerNode.querySelector('[data-type="time-counter"]');

    this.duration = this._video.duration;
    this.handleMute();

    this.handleMute = this.handleMute.bind(this);
    this.handlePlay = this.handlePlay.bind(this);
    this.handleProgress = this.handleProgress.bind(this);

    this.handleMute();

    this._soundButton.addEventListener('click', this.handleMute);
    this._playButton?.addEventListener('click', this.handlePlay);
    this._video.addEventListener('timeupdate', this.handleProgress);
  }

  handleMute(event) {
    this._video.muted ? this.unmute() : this.mute();
    this._soundButton.textContent = this._video.muted ? 'unmute' : 'mute';
  }

  handlePlay(event) {
    this._video.paused ? this.play() : this.pause();
  }

  handleProgress(event) {
    const percent = (this._video.currentTime / this.duration) * 100;
    const timeLeft = this.duration - this._video.currentTime;

    this._progressLine.style.width = `${percent}%`;
    this._timeCounter.textContent = this.formatTime(timeLeft);
  }

  formatTime(time) {
    const minutes = Math.floor(time / 60) < 10 ? `0${Math.floor(time / 60)}` : `${Math.floor(time / 60)}`;
    const seconds = Math.floor(time % 60) < 10 ? `0${Math.floor(time % 60)}` : `${Math.floor(time % 60)}`;
    return `${minutes}:${seconds}`
  }

  play() {
    this._video.play();
  }

  pause() {
    this._video.pause();
  }

  mute() {
    this._video.muted = true;
  }

  unmute() {
    this._video.muted = false;
  }
}

class SkipVideoPlayer extends VideoPlayer {
  constructor(playerNode, skipCallback) {
    super(playerNode);
    this._callback = skipCallback;
    this._skipButton = this.playerNode.querySelector('[data-type="skip-button"]');

    this.handleSkip = this.handleSkip.bind(this);
    this._skipButton.addEventListener('click', this.handleSkip);
  }

  handleSkip(event) {
    this.skip();
  }

  skip() {
    this._video.pause();
    this._callback();
  }
}

class BechCarouser {
  constructor(sliderNode, options) {
    this.sliderNode = sliderNode;
    if (!this.sliderNode) return;
    this.options = {
      duration: 4000,
      changingDuration: 600,
      ...options,
    }
    this._currentIndex = 0;
    this.slidesArray = Array.from(this.sliderNode.querySelectorAll('[data-type="slide"]'));
    this.prevButton = this.sliderNode.querySelector('[data-type="prev"]');
    this.nextButton = this.sliderNode.querySelector('[data-type="next"]');
    this.slidesCurrentNumberNode = this.sliderNode.querySelector('[data-type="current"]');
    this.slidesCountNode = this.sliderNode.querySelector('[data-type="count"]');

    this.handleButtonClick = this.handleButtonClick.bind(this);

    this.prevButton.addEventListener('click', this.handleButtonClick);
    this.nextButton.addEventListener('click', this.handleButtonClick);

    this.setSlidesStyles();
    this.initDuration();
  }

  get currentIndex() {
    return this._currentIndex;
  }

  set currentIndex(num) {
    let number = parseInt(num);
    switch (true) {
      case number < 0:
        this._currentIndex = this.slidesArray.length - 1;
        break;
      case number >= this.slidesArray.length:
        this._currentIndex = 0;
        break;
      default:
        this._currentIndex = number;
        break;
    }

    return this._currentIndex;
  }

  setSlidesStyles() {
    this.slidesArray.forEach((slide, index) => {
      if (index === this.currentIndex) {
        slide.classList.add('bech-slider__slide--active');
        // $(slide).animate({opacity: 1}, this.options.changingDuration);
        animate(slide, {opacity: 1}, this.options.changingDuration);
      } else {
        slide.classList.remove('bech-slider__slide--active');
        // $(slide).animate({opacity: 0}, this.options.changingDuration);
        animate(slide, {opacity: 0}, this.options.changingDuration);
      }
    });
  }

  initDuration() {
    if (this.options.duration < 1000) {
      this.options.duration = 1000;
    }

    clearInterval(this.interval);
    cancelAnimationFrame(this.animation);
    console.log(this.animation)

    this.interval = setInterval(() => {
      // $('.arrow-button__progress').css({strokeDashoffset: 0})
      this.nextButton.querySelector('.arrow-button__progress').style.strokeDashoffset = 0;
      this.next();
      this.animation = animate(this.nextButton.querySelector('.arrow-button__progress'), {strokeDashoffset: Math.PI*(24*2)}, this.options.duration);
    }, this.options.duration);
  }

  handleButtonClick(event) {
    event.preventDefault();
    event.stopPropagation();
    const button = event.target.closest('button');
    if (!button) return;
    const {type} = button.dataset;

    type === 'prev' ? this.prev() : this.next();
    this.initDuration();
  }

  setCurrentSlideNumber() {
    this.slidesCurrentNumberNode.innerText = this.currentIndex + 1;
  }

  prev() {
    this.currentIndex = this.currentIndex - 1;
    this.setCurrentSlideNumber();
    this.setSlidesStyles();
  }

  next() {
    this.currentIndex = this.currentIndex + 1;
    this.setCurrentSlideNumber();
    this.setSlidesStyles();
  }
}

new BechCarouser(document.querySelector('[data-type="slider"]'), {
  duration: 4000
});

const initLoader = () => {
  const loaderNode = document.querySelector('.loader');

  if (!loaderNode) return;

  const loaderData = JSON.parse(window.localStorage.getItem('loader'));
  const skipCallback = () => {
    const data = {
      skipped: true,
      date: Date.now() + 1000 * 60 * 60 * 24
    }
    window.localStorage.setItem('loader', JSON.stringify(data));
    loaderNode.classList.remove('loader--active');
    document.body.classList.remove('body--freeze');
  }
  const openPlayerButton = document.querySelector('[data-button="open-player"]');
  const player = new SkipVideoPlayer(loaderNode.querySelector('[data-type="video-player"]'), skipCallback);
  player.pause();

  if (!loaderData || loaderData.date <= Date.now()) {
    loaderNode.classList.add('loader--active');
    document.body.classList.add('body--freeze');
    player.play();
  } else {
    console.log('hide loader');
  }

  openPlayerButton.addEventListener('click', event => {
    event.preventDefault();
    loaderNode.classList.add('loader--active');
    document.body.classList.add('body--freeze');
    player.play();
  });
}

const initMainBookTicketsCursor = () => {
  const cursor = document.querySelector('[data-type="cursor"]');
  if (!cursor) return;
  const cursorContainer = document.querySelector('[data-type="cursor-area"]');

  cursorContainer.addEventListener('mousemove', (event) => {
    const targetCoords = cursorContainer.getBoundingClientRect();
    const xCoord = (event.clientX - targetCoords.left) + (cursor.clientWidth / 2);
    const yCoord = (event.clientY - targetCoords.top) + (cursor.clientHeight / 2);

    cursor.style.transform = `translate3d(${xCoord}px, ${yCoord}px, 0)`;
  })
}

const initWhatsOnFilters = () => {
  const calendarWidget = new CalendarWidget(
    document.getElementById('filter-date')
  );
  const filterFormNode = document.querySelector('[data-filter="form"]');
  const ticketsContainer = document.getElementById('tickets-container');
  if (!filterFormNode && !ticketsContainer) return;
  const filterInputs = Array.from(filterFormNode.querySelectorAll('input'));
  const searchInput = filterInputs.find((input) => input.type === 'search');
  const clearFiltersButton = document.getElementById('clear');
  const showSelectedFilters = (selectedString = '') => {
    const selectedBlock = document.getElementById('selected-filters');
    const selectedTextBlock = selectedBlock?.querySelector(
      '[data-filter="choosen"]'
    );

    selectedBlock.classList.toggle(
      'filters-line-text--active',
      !!selectedString
    );
    selectedTextBlock.textContent = selectedString;
  };
  const getTickets = async (event) => {
    console.log(event);
    event?.preventDefault();

    const formData = new FormData(filterFormNode);
    const fetchOptions = {
      method: 'POST',
      body: formData,
    };

    console.log('formData: ', Object.fromEntries(formData.entries()));

    try {
      const data = await (
        await fetch(
          `${bech_var.home_url}/wp-json/tix-webhook/v1/whats-on-filter`,
          fetchOptions
        )
      ).json();

      console.log(data);

      if (data.code !== 'success') {
        throw new Error(data.message);
      }

      showSelectedFilters(data?.data?.selected_string);
      ticketsContainer.innerHTML = data?.data?.html;
    } catch (e) {
      console.error(e);
      alert('Something goes wrong, please try again later!');
    }
  };
  const clearFilters = (event) => {
    event?.preventDefault();
    filterFormNode.reset();
    calendarWidget.reset();
    getTickets();
  };
  const searchInputMiddleware = (callback) => {
    let inputValue = '';
    return function (...args) {
      if (inputValue !== args[0].target.value) {
        inputValue = args[0].target.value;
        return callback.apply(this, args);
      } else {
        return;
      }
    };
  };

  filterInputs.forEach((filterInput) => {
    if (filterInput.type === 'search') {
      filterInput.addEventListener('change', searchInputMiddleware(getTickets));
    } else {
      filterInput.addEventListener('change', getTickets);
    }
  });

  searchInput.addEventListener(
    'input',
    debounce((event) => {
      event.target.dispatchEvent(new Event('change'));
    }, 500)
  );

  clearFiltersButton.addEventListener('click', clearFilters);
};

initWhatsOnFilters();

const initPressReleaseFilters = () => {
  const formFiltersNode = document.getElementById('press-filter-form');

  if (!formFiltersNode) return;

  const inputNodes = Array.from(formFiltersNode.querySelectorAll('input'));
  const pressPostsContainerNode = document.getElementById(
    'press-office-container'
  );
  const changeInputHandler = async (event) => {
    if (event.target.name === 'tag') {
      inputNodes.find((input) => input.name === 'page').value = 1;
    }

    const formData = new FormData(formFiltersNode);

    try {
      const data = await (
        await fetch(bech_var.url, {
          method: 'POST',
          body: formData,
        })
      ).json();

      console.log(data);

      if (data.status !== 'success') {
        throw new Error('Something goes wrong');
      }

      if (parseInt(formData.get('page')) > 1) {
        pressPostsContainerNode.querySelector('.showmore-btn').remove();
        pressPostsContainerNode.insertAdjacentHTML('beforeend', data.html);
      } else {
        pressPostsContainerNode.innerHTML = data.html;
      }
    } catch (e) {
      console.error(e);
    }
  };
  const showMoreHandler = (event) => {
    const showMoreButton = event.target.closest('.showmore-btn');
    if (showMoreButton) {
      event.stopPropagation();
      event.preventDefault();
      showMoreButton.classList.add('showmore-btn--loading');

      const pageNomberInputNode = document.querySelector('[name="page"]');

      pageNomberInputNode.value = parseInt(pageNomberInputNode.value) + 1;
      pageNomberInputNode.dispatchEvent(new Event('change'));
    }
  };

  inputNodes.forEach((inputNode) =>
    inputNode.addEventListener('change', changeInputHandler)
  );

  document.addEventListener('click', showMoreHandler);
};

initPressReleaseFilters();

const initTixSessions = () => {
  const tixIframe = document.getElementById('tix');
  if (!tixIframe) return;

  tixIframe.contentWindow.postMessage(
    'GetSession',
    'https://tix.bechsteinhall.func.agency/en/itix'
  );

  window.addEventListener('message', (event) => {
    window.tixCart.setData(event.data);
  });
};

const initHomeFilterForm = () => {
  const formNode = document.getElementById('home-filter-form');
  if (!formNode) return;
  const inputNodes = Array.from(formNode.querySelectorAll('input:not([type="submit"]):not([name="action"])'));
  const getTickets = async event => {
    event?.preventDefault();
    const formData = new FormData(formNode);

    console.log(Object.fromEntries(formData.entries()));

    try {
      const fetchOptions = {
        method: 'POST',
        body: formData
      }

      const response = await fetch(bech_var.url, fetchOptions);
      const data = await response.json();

      console.log(data);

      if (data.status === 'bad') {
        throw new Error('wrong request');
      }

      document.querySelector('.wo-slider').innerHTML = data.html;
      console.log(window.whatsOnSlider);
      window.whatsOnSlider.reset(Array.from(document.querySelectorAll('.wo-slide')));
    } catch (e) {
      console.error(e)
    }
  }

  inputNodes.forEach(input => input.addEventListener('change', getTickets));
}

window.addEventListener('load', () => {
  $('#date-picker').datepicker();
  // initMainBookTicketsCursor();
});

document.addEventListener('DOMContentLoaded', () => {
  initLoader();
  initTixSessions();
  initHomeFilterForm();
  window.whatsOnSlider = new WhatsOnSlider(Array.from(document.querySelectorAll('.wo-slide')));
});
