const initWhatsOnFilters = () => {
  const $form = document.querySelector('[data-filter="form"]');
  const $filterCheckboxes = Array.from(
    $form?.querySelectorAll('[data-filter="checkbox"]') || []
  );
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
    } catch (error) {
      console.error(error);
    }
  };

  for (let i = 0; i < $filterCheckboxes.length; i++) {
    const $checkbox = $filterCheckboxes[i];
    $checkbox.addEventListener('change', handleChange);
  }
};

initWhatsOnFilters();

const initTixSessions = () => {
  const tixIframe = document.getElementById('tix');
  if (!tixIframe) return;

  tixIframe.addEventListener('load', (event) => {
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
