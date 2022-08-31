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
    this.currentIndex = this.startIndex + x;
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
      if (index <= Math.floor(this._currentIndex + 2)) {
        this.firstSlides.push(slide);
      } else {
        this.deckSlides.push(slide);
      }
    });

    const diff = this.currentIndex - Math.floor(this.currentIndex);

    this.firstSlides.forEach((slide, index) => {
      this.setSlideStyles(slide, {
        transform: `translate3d(${
          this._slideSize.width * (this.firstSlides.length - (index + 1 - diff))
        }px, 0, 0)`,
        zIndex: '',
        opacity: '',
        pointerEvents: '',
      });
    });

    this.deckSlides.forEach((slide, index) => {
      if (index < 2) {
        this.setSlideStyles(slide, {
          zIndex: -(index + 1),
          opacity: 1 - 0.2 * (index + 1 - diff),
          transform: `translate3d(-${
            this._slideSize.width * 0.05 * (index + 1 - diff)
          }px, 0, 0) scale(${1 - 0.05 * (index + 1 - diff)})`,
          pointerEvents: 'none',
        });
      } else {
        this.setSlideStyles(slide, {
          opacity: 0,
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

  tixIframe.addEventListener('load', (event) => {
    console.log('loaded Iframe');
    event.target.contentWindow.postMessage(
      'GetSession',
      'https://tixbechsteinhall.func.agency/en/itix'
    );
  });

  window.addEventListener('message', (event) => {
    console.log(event);
  });
};

window.addEventListener('load', () => {
  $('#date-picker').datepicker();
});

document.addEventListener('DOMContentLoaded', () => {
  initTixSessions();
  new WhatsOnSlider(Array.from(document.querySelectorAll('.wo-slide')));
});
