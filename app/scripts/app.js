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
  $('.faq-box').click(function(){
    $(this).toggleClass("faq-box-open").toggleClass("faq-box-close").next().slideToggle();
  });
  // /спойлер-блок на странице faq

  // спрятать блок обратной связи на странице с картой
  $('._contacts__form-close').click(function(){
    $('._contacts__form').addClass("contacts__form-hide");
  });
  // /спрятать блок обратной связи на странице с картой

});
