// promo_banner javascript
(function (Drupal, once) {
  Drupal.behaviors.Promo_bannerForm = {
    attach: function (context) {
      const forms = once('Promo_bannerForm', context.querySelectorAll('form[id^="promo_banner_form_id"]'));

      forms.forEach(form => {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          const data = new FormData(form);

          fetch(drupalSettings.path.baseUrl+'promo_banner/submit', {
            method: 'POST',
            body: data,
            credentials: 'same-origin'
          })
          .then(res => res.json())
          .then(res => {
            const el = form.nextElementSibling; // #response div
            if (res.success) {
              //Add action if access
              form.reset();
            } else {
             //Add action when failed
            }
          });
        });
      });
    }
  };
})(Drupal, once);