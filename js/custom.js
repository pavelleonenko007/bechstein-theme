const initWhatsOnFilters = () => {
  const $form = document.querySelector('[data-filter="form"]');
  const $filterCheckboxes = Array.from(
    $form?.querySelectorAll('[data-filter="checkbox"]') || []
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
      // $($filterCheckboxes).change();
      // $form.querySelector('[type="submit"]').click();
    });
  };

  initClearFiltersButton();
  for (let i = 0; i < $filterCheckboxes.length; i++) {
    const $checkbox = $filterCheckboxes[i];
    $checkbox.addEventListener('change', handleChange);
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

document.addEventListener('DOMContentLoaded', () => {
  initTixSessions();
});
