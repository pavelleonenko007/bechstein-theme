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

const receiveMessageFromTix = (event) => {
  if (event.origin !== 'tix.bechsteinhall.func.agency') {
    return;
  }

  console.log(event);
};

const initTixSessions = () => {
  window.addEventListener('message', receiveMessageFromTix, false);

  const $tixIframe = document.getElementById('tix');
  const tixDomain = $tixIframe.getAttribute('src');
  const tixWindow = $tixIframe.contentWindow;

  tixWindow.postMessage('GetSession', tixDomain);
};

document.addEventListener('DOMContentLoaded', () => {
  initTixSessions();
});
