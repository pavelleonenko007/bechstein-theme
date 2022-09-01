class UserCart {
  constructor(userData = {}) {
    this._orders = userData.order?.items || [];
    this._user = userData?.user || {};
    this._profileUrl = userData?.profile || '#';
    this._logoutUrl = 'https://tix.bechsteinhall.func.agency/en/logout/';
    this._loginUrl = 'https://tix.bechsteinhall.func.agency/en/login/';

    this._init();
  }

  setData(data = {}) {
    this._orders = data?.order?.items || [];
    this._user = data?.user || null;
    this._profileUrl = data?.profile || '#';
    document.querySelector('[data-account="container"]').remove();
    this._setMarkup();
  }

  _setMarkup() {
    const links = this._user?.email
      ? `<a href="${this._profileUrl}" class="account__link">Profile</a>
    <a href="${this._logoutUrl}" class="account__link">Log out</a>`
      : `<a href="${this._loginUrl}" class="account__link">Log in</a>`;

    const markup = `<div class="account" data-account="container">
      <div class="account__cart cart">
        <svg class="cart__bag" version="1.1" id="Capa_1" x="0px" y="0px"width="20px" height="20px" viewBox="0 0 502.714 502.715" style="enable-background:new 0 0 502.714 502.715;" xml:space="preserve">
          <path d="M449.958,485.949l-32.375-327.957c-0.682-6.923-6.508-12.195-13.465-12.195h-60.545V92.289
		C343.573,41.394,302.173,0,251.292,0c-50.887,0-92.282,41.395-92.282,92.289v53.509H98.458c-6.956,0-12.776,5.272-13.464,12.195
		L52.433,487.852c-0.377,3.805,0.872,7.586,3.436,10.412c2.563,2.84,6.209,4.451,10.027,4.451h370.792c0.04,0,0.085,0,0.132,0
		c7.473,0,13.529-6.062,13.529-13.527C450.348,488.064,450.216,486.982,449.958,485.949z M186.068,92.289
		c0-35.963,29.259-65.23,65.223-65.23s65.223,29.268,65.223,65.23v53.509H186.068V92.289z M110.718,172.857h48.291v27.376
		c0,7.464,6.059,13.528,13.53,13.528c7.472,0,13.529-6.064,13.529-13.528v-27.376h130.446v27.376
		c0,7.464,6.058,13.528,13.528,13.528c7.472,0,13.529-6.064,13.529-13.528v-27.376h48.286l24.62,249.37H86.098L110.718,172.857z
		 M80.825,475.66l2.603-26.373h335.727l2.603,26.373H80.825z"/>
      </svg>
        <div class="cart__counter">${this._orders.length}</div>
      </div>
      <div class="account__actions" data-account="actions">
        ${links}
      </div>
    </div>`;

    document.body.insertAdjacentHTML('beforeend', markup);
  }

  _clickHandler(event) {
    if (event.target.closest('[data-account="container"]')) {
      const target = event.target.closest('[data-account="container"]');

      target.classList.toggle(
        'account--open',
        !target.classList.contains('account--open')
      );
    }
  }

  _init() {
    this._setMarkup();
    this._clickHandler = this._clickHandler.bind(this);
    document.body.addEventListener('click', this._clickHandler);
  }
}

window.tixCart = new UserCart();

class WhatsOnSlider {
  constructor(data = []) {
    this._data = data;
    this.sliderContainerNode = document.querySelector('.wo-slider');

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
}

const initWhatsOnFilters = () => {
  const $form = document.querySelector('[data-filter="form"]');
  const $filterFields = Array.from(
    $form?.querySelectorAll(
      'input:not([type="hidden"]):not([type="submit"])'
    ) || []
  );
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
  const handleChange = async (event) => {
    const formData = new FormData($form);

    try {
      const response = await fetch(
        `${bech_var.home_url}/wp-json/tix-webhook/v1/whats-on-filter`,
        {
          method: 'POST',
          body: formData,
        }
      );

      const data = await response.json();
      console.log(data);
      if (data.code !== 'success') {
        throw new Error(data.message);
      }

      showSelectedFilters(data.data.selected_string);
      const ticketsContainer = document.getElementById('tickets-container');

      ticketsContainer.innerHTML = data.data.html;
      $([document.documentElement, document.body]).animate(
        {
          scrollTop:
            $('h1').offset().top -
            document.querySelector('.navbar').clientHeight,
        },
        1500
      );
    } catch (error) {
      console.error(error);
    }
  };
  const initClearFiltersButton = () => {
    const clearButton = document.getElementById('clear');

    clearButton?.addEventListener('click', (event) => {
      $form.reset();
      handleChange();
      // $($filterFields).change();
      // $form.querySelector('[type="submit"]').click();
    });
  };

  initClearFiltersButton();
  for (let i = 0; i < $filterFields.length; i++) {
    const $field = $filterFields[i];
    $field.addEventListener('change', handleChange);
    // $($checkbox).change(handleChange);
  }
};

initWhatsOnFilters();

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

window.addEventListener('load', () => {
  $('#date-picker').datepicker();
});

document.addEventListener('DOMContentLoaded', () => {
  initTixSessions();
  new WhatsOnSlider(Array.from(document.querySelectorAll('.wo-slide')));
});
