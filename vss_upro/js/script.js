jQuery(document).ready(function ($) {

  //mega menu
  $(".top-menu>li").hover(function() {
    $(this).children('.mega-menu').addClass('is-open')
  }, function() {
    $('.mega-menu').removeClass('is-open');
  });

  //slider
  var swiper3x = new Swiper(".slider-3x", {
    slidesPerView: 1,
    spaceBetween: 15,
    navigation: {
      nextEl: ".next-3x",
      prevEl: ".prev-3x",
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,

      },
      1024: {
        slidesPerView: 3,

      },
    },
  });

  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });

  //slider
  var swiperCases = new Swiper(".cases-slider", {
    slidesPerView: 1,
    spaceBetween: 15,
    pagination: {
      el: ".cases-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".cases-next",
      prevEl: ".cases-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 2,

      },
    },
  });

  //slider
  var swiperImg = new Swiper(".img-slider", {
    slidesPerView: 1.15,
    centeredSlides: true,
    loop:true,
    spaceBetween: 15,
    navigation: {
      nextEl: ".img-next",
      prevEl: ".img-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 1.5,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,

      },
    },
  });



  //select
  $('.select-block select').niceSelect();

  //fancybox
  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
  });

  //slider
  var swiperStep = new Swiper(".step-slider", {
    slidesPerView: "auto",
    spaceBetween: 16,
    pagination: {
      el: ".step-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".step-next",
      prevEl: ".step-prev",
    },

  });

  //slider
  var swiperBlog = new Swiper(".blog-slider", {
    slidesPerView: "auto",
    spaceBetween: 16,
    pagination: {
      el: ".blog-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".blog-next",
      prevEl: ".blog-prev",
    },
  });

  //slider
  var swiperReferences = new Swiper(".references-slider", {
    autoHeight: true,
    navigation: {
      nextEl: ".references-next",
      prevEl: ".references-prev",
    },
  });

  setTimeout(function(){
    swiperReferences.update();
  },500);

  //click dot
  $(document).on('click', '.references .bottom ul a', function (e){
    e.preventDefault();
    let itemActive = $(this).closest('li').index();
    $('.references .bottom ul li').removeClass('is-active');
    $(this).closest('.item').addClass('is-active');
    swiperReferences.slideTo(itemActive);

    console.log(itemActive)
  });

  swiperReferences.on('slideChange', function () {
    let item = swiperReferences.activeIndex + 1;
    $('.references .bottom ul li').removeClass('is-active');
    $('.references .bottom ul li:nth-child(' + item + ')').addClass('is-active');

  });


  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu>li:nth-child(n+2)>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //sub-menu open/close - footer
  $(document).on('click', 'footer .right .item h6', function (e){
    e.preventDefault();
    let item = $(this).closest('.item').find('.wrap');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  if($('.history').length){
    $(".history .right .wrap-scroll").niceScroll(".history .right ul ",{
      cursorcolor: "#e6544b",
      cursorwidth: "7px",
      cursorborder: "0 solid #7B93FF",
      horizrailenabled: false,
      autohidemode: "scroll",
      cursoropacitymin: 1,
      railpadding: { top: 0, right: 5, left: 0, bottom: 0 },
      zindex: 9999999,
      cursorborderradius: "5px",
      background: "transparent",
    });
  }

  //slider
  var swiperImgFull = new Swiper(".img-full-slider", {
    loop:true,
    navigation: {
      nextEl: ".img-full-next",
      prevEl: ".img-full-prev",
    },
  });

  //slider
  var swiperStepForm = new Swiper(".step-slider-form", {
    autoHeight: true,
    spaceBetween: 20,
    pagination: {
      el: ".form-pagination",
      type: "progressbar",
    },
    speed:700,
    allowTouchMove:false,
    touchRatio: 1,
    noSwiping: false,
    preventClicks :true,
    a11y: false,
  });

  //validate form

  $.validator.addMethod('emailtld', function(val, elem){
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!filter.test(val)) {
      return false;
    } else {
      return true;
    }
  }, 'Please enter your email');

  $('.form-step').validate({
    rules: {
      name:{
        minlength: 3,
        required: true,
      },
      lastName:{
        minlength: 3,
        required: true,
      },
      tel: {
        minlength: 10,
        required: true,
      },
      emailStep: {
        minlength: 7,
        required: true,
        emailtld: true,
      },
      input21:{
        minlength: 3,
        required: true,
      },
      input22:{
        minlength: 3,
        required: true,
      },
      input23:{
        minlength: 3,
        required: true,
      },
      input24:{
        minlength: 3,
        required: true,
      },
    },
    messages: {
      name:{
        minlength: "Enter at least 3 characters"
      },
      lastName:{
        minlength: "Enter at least 3 characters"
      },
      emailStep:{
        minlength: "Please enter your email",
      },
      tel:{
        minlength: "Please enter your phone number"
      },
      input21:{
        minlength: "Enter at least 3 characters"
      },
      input22:{
        minlength: "Enter at least 3 characters"
      },
      input23:{
        minlength: "Enter at least 3 characters"
      },
      input24:{
        minlength: "Enter at least 3 characters"
      },
    }
  });

  $('.form-step .input-wrap-val input').on('keyup blur', function () {

    if ($(this).valid()) {
      $(this).closest('.input-wrap').removeClass('input-wrap-val')
    } else {
      $(this).closest('.input-wrap').addClass('input-wrap-val')
    }

    let item = $(this).closest('.swiper-slide').find('.input-wrap-val').length,
      itemBTN = $(this).closest('.swiper-slide').find('.btn-wrap');

    if(item < 1){
      itemBTN.addClass('is-go-next')
    }else{
      itemBTN.removeClass('is-go-next')
    }

  });

/*  $(document).on('click', '.form-step .nice-select .option', function (e){
    $(this).closest('.select-block').removeClass('input-wrap-val');

    let item = $(this).closest('.swiper-slide').find('.input-wrap-val').length,
      itemBTN = $(this).closest('.swiper-slide').find('.btn-wrap');

    if(item < 1){
      itemBTN.addClass('is-go-next')
    }else{
      itemBTN.removeClass('is-go-next')
    }
  });*/


  //next slide
  $(document).on('click', '.btn-next', function (e){
    e.preventDefault();
    swiperStepForm.slideNext();
  });

  //prev slide
  $(document).on('click', '.btn-prev', function (e){
    e.preventDefault();
    swiperStepForm.slidePrev();
  });

});