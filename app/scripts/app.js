$(document).ready(function() {

  // подсвечиваем ссылки с одинаковым адресом
  $(document).on('mouseover mouseout', "a", function(e) {
    var href = $(this).attr('href');
      if (!href || href == '#') {
        return;
      }
    $("a")
      .filter('[href="' + $(this).attr('href') + '"]')
      .toggleClass("hover", e.type == 'mouseover');
  });
  // /подсвечиваем ссылки с одинаковым адресом

  $('select').niceSelect();

  // спойлер-блок на странице faq
  $('.faq__item .faq__q').on('click',function() {
    $(".faq__q").removeClass("faq__q-open");
    $('.faq__content').removeClass('faq__content-open');
    $(this).addClass("faq__q-open");
    $(this).next('.faq__content').addClass('faq__content-open');
  });
  // /спойлер-блок на странице faq

  // спрятать блок обратной связи на странице с картой
  $('._contacts__form-close').click(function(){
    $('._contacts__form').toggleClass("contacts__form-hide").next();
  });
  // /спрятать блок обратной связи на странице с картой

});
