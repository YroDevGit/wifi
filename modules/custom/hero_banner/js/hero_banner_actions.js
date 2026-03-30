// hero_banner javascript
(function (Drupal, once) {
  Drupal.behaviors.Hero_bannerForm = {
    attach: function (context) {
      const forms = once('Hero_bannerForm', context.querySelectorAll('form[id^="hero_banner_form_id"]'));

      forms.forEach(form => {
        form.addEventListener('submit', function (e) {
          e.preventDefault();
          const data = new FormData(form);

          fetch(drupalSettings.path.baseUrl+'hero_banner/submit', {
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