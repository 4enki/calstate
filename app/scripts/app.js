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

  // спойлер-блок на странице careers
  $('.careers__item .careers__q').on('click',function() {
      $(".careers__q").removeClass("careers__q-open");
      $('.careers__content').removeClass('careers__content-open');
      $(this).addClass("careers__q-open");
      $(this).next('.careers__content').addClass('careers__content-open');
  });
  // /спойлер-блок на странице careers

  // спрятать блок обратной связи на странице с картой
  $('._contacts__form-close').click(function(){
    $('._contacts__form').toggleClass("contacts__form-hide").next();
  });
  // /спрятать блок обратной связи на странице с картой

  // показываем попап добавления вопроса
  $('.add-question-modal').magnificPopup({
    showCloseBtn: true,
    type: 'inline',

    fixedContentPos: true,
    fixedBgPos: false,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });
  // кнопка закрытия попапа добавления вопроса
  $('._mfp-close').click(function(){
    $.magnificPopup.close();
  });
  // /кнопка закрытия попапа добавления вопроса
  // /показываем попап добавления вопроса

  var owl = $("#reviews-box");
  owl.owlCarousel({
    items: 2,
    navigation: false
  });

});
