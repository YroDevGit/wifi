/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
;
(function(Drupal,once){Drupal.behaviors.PricingForm={attach:function(context){const forms=once('PricingForm',context.querySelectorAll('form[id^="pricing_form_id"]'));forms.forEach((form)=>{form.addEventListener('submit',function(e){e.preventDefault();const data=new FormData(form);fetch(drupalSettings.path.baseUrl+'pricing/submit',{method:'POST',body:data,credentials:'same-origin'}).then((res)=>res.json()).then((res)=>{const el=form.nextElementSibling;if(res.success)form.reset();else{}});});});}};})(Drupal,once);;
