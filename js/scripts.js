jQuery(document).ready(function ($) {
  $(".cross").hide();
  $(".menu-mobile").hide();
  $(".hamburger").click(function () {
    $(".menu-mobile").slideToggle("slow", function () {
      $(".hamburger").hide();
      $(".cross").show();
    });
  });

  $(".cross").click(function () {
    $(".menu-mobile").slideToggle("slow", function () {
      $(".cross").hide();
      $(".hamburger").show();
    });
  });

  $(window).scroll(function(){
    var sticky = $('.header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
  });

  $(".menu-mobile .menu > .menu-item-has-children > a, .header .header__lang .menu > li > a").click(function (e) {
    e.preventDefault();
    $(this).next('.sub-menu').slideToggle();
  });

  $('.gallery a').attr('data-lightbox', 'roadtrip');
  $('.gallery a, .section-banner-style-three .section-banner-style-three__img>img, .section-banner-style-three .section-banner-style-three__img>a>img, .section-banner-style-four .section-banner-style-four__img>img, .section-banner-style-four .section-banner-style-four__img>a>img, .section-banner-style-eight .section-banner-style-eight__img > img, .section-banner-style-eight .section-banner-style-eight__img > a > img, .interactive-banners-one__img > a > img, .interactive-banners-two__img > a > img, .interactive-banners-five__img > a > img, .interactive-banners-six__img > a > img, .interactive-banners-seven__img > a > img, .interactive-banners-nine__img > a > img, .interactive-banners-one__img > img, .interactive-banners-two__img > img, .interactive-banners-five__img > img, .interactive-banners-six__img > img, .interactive-banners-seven__img > img, .interactive-banners-nine__img > img').keepRatio({ ratio: 4/3, calculate: 'height' });
  $('.interactive-banners-four .interactive-banners-four__img>img, .interactive-banners-four .interactive-banners-four__img>a>img').keepRatio({ ratio: 1/1, calculate: 'height' });
  $('.interactive-banners-eight .interactive-banners-eight__img > img, .interactive-banners-eight .interactive-banners-eight__img > a > img').keepRatio({ ratio: 3/4, calculate: 'height' });

  $('.wp-caption p').matchHeight();
  $('.gallery-caption').matchHeight();
  $('.section-banner-style-one__rectangle').matchHeight();
  $('.section-banner-style-one__title, .section-banner-style-two__title, .section-banner-style-three__title, .section-banner-style-four__title, .section-banner-style-five__title, .section-banner-style-six__title, .section-banner-style-seven__title, .section-banner-style-eight__title, .section-banner-style-nine__title, .section-banner-style-ten__title, .section-banner-style-eleven__title, .interactive-banners-one__title, .interactive-banners-two__title, .interactive-banners-five__title, .interactive-banners-seven__title, .interactive-banners-nine__title').matchHeight();
  $('.section-banner-style-one__desc, .section-banner-style-two__desc, .section-banner-style-three__desc, .section-banner-style-four__desc, .section-banner-style-five__desc, .section-banner-style-six__desc, .section-banner-style-seven__desc, .section-banner-style-eight__desc, .section-banner-style-nine__desc, .section-banner-style-ten__desc, .section-banner-style-eleven__desc, .interactive-banners-one__desc, .interactive-banners-two__desc, .interactive-banners-five__desc, .interactive-banners-seven__desc, .interactive-banners-nine__desc').matchHeight();
  $('.section-banner-style-ten .section-banner-style-ten__img').matchHeight();
  $('.interactive-banners-six__header').matchHeight();

  $(".section-hero-one__slider")
      .on("init", function (event, slick) {
        $(".section-hero-one__counter--number").text(slick.currentSlide + 1);
      })
      .slick({
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        lazyLoad: "progressive",
        pauseOnHover: false,
        pauseOnFocus: false,
        focusOnSelect: false,
        dots: false,
        arrows: true,
        prevArrow: $(".section-hero-one__arrow--prev"),
        nextArrow: $(".section-hero-one__arrow--next"),
      })
      .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".section-hero-one__counter--number").text(nextSlide + 1);
      })
      .slickAnimation();
      $('#opinie .section-banner-style-five__boxes').slick({
        adaptiveHeight: true,
        dots: false,
        arrows: true,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              adaptiveHeight: true,
              arrows: false,
              dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              adaptiveHeight: true,
              arrows: false,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              adaptiveHeight: true,
              arrows: false,
              dots: true
            }
          }
        ]
      });
  $(".section-hero-two__slider")
      .on("init", function (event, slick) {
        $(".section-hero-two__number--current").text(slick.currentSlide + 1);
        $(".section-hero-two__number--total").text(slick.slideCount);
      })
      .slick({
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        arrows: true,
        dots: false,
        prevArrow: $(".section-hero-two__arrow--prev"),
        nextArrow: $(".section-hero-two__arrow--next"),
        pauseOnFocus: false,
        pauseOnHover: false,
      })
      .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".section-hero-two__number--current").text(nextSlide + 1);
      })
      .slickAnimation();

  var slider_height_caption = $(".section-hero-two__img").height() / 2;
  var slider_height_line = $(".section-hero-two__img").height() / 2 - 130;
  $(".section-hero-two__navigation").css("height", slider_height_caption + "px");
  $(".section-hero-two__line").css("height", slider_height_line + "px");

  $(".section-hero-three__slider")
      .on("init", function (event, slick) {
        $(".section-hero-three__number--current").text(slick.currentSlide + 1);
        $(".section-hero-three__number--total").text(slick.slideCount);
      })
      .slick({
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 500,
        lazyLoad: "progressive",
        pauseOnHover: false,
        pauseOnFocus: false,
        focusOnSelect: false,
        dots: false,
        arrows: true,
        prevArrow: $(".section-hero-three__arrow--prev"),
        nextArrow: $(".section-hero-three__arrow--next"),
      })
      .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".section-hero-three__number--current").text(nextSlide + 1);
      })
      .slickAnimation();

  $(".section-hero-four__slider").slick({
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 500,
    lazyLoad: "progressive",
    pauseOnHover: false,
    pauseOnFocus: false,
    focusOnSelect: false,
	autoplay: true,
	autoplaySpeed: 5000,
    dots: true,
    arrows: true,
    prevArrow: $(".section-hero-four__arrow--prev"),
    nextArrow: $(".section-hero-four__arrow--next"),
  }).slickAnimation();

  $(".section-hero-five__slider").slick({
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 500,
    lazyLoad: "progressive",
    pauseOnHover: false,
    pauseOnFocus: false,
    focusOnSelect: false,
	autoplay: true,
	autoplaySpeed: 5000,
    dots: true,
    arrows: false,
  }).slickAnimation();
  $('#trust-us .section-banner-style-five__img > img').addClass('svg-convert');
  $('#opinie .section-banner-style-five__img > img').addClass('svg-convert');

  $('img.svg-convert').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    jQuery.get(imgURL, function(data) {
      var $svg = jQuery(data).find('svg');
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
      }
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);
    }, 'xml');
  });

  if ($(window).width() >= 1200) {
    $('.section-banner-style-two .section-banner-style-two__box:nth-child(6n + 2) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 3) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 4) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 5) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 2) .section-banner-style-two__img > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 3) .section-banner-style-two__img > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 4) .section-banner-style-two__img > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 5) .section-banner-style-two__img > img').keepRatio({ ratio: 1/1, calculate: 'height' });

    var realization = $('.section-banner-style-two .section-banner-style-two__box:nth-child(6n + 2) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 2) .section-banner-style-two__img > img').height();

    $('.section-banner-style-two .section-banner-style-two__box:nth-child(6n + 1) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 1) .section-banner-style-two__img > img').css('height', realization + 'px');

    $('.section-banner-style-two .section-banner-style-two__box:nth-child(6n + 6) .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box:nth-child(6n + 6) .section-banner-style-two__img > img').css('height', realization + 'px');
  }
  else {
    $('.section-banner-style-two .section-banner-style-two__box .section-banner-style-two__img > a > img, .section-banner-style-two .section-banner-style-two__box .section-banner-style-two__img > img').keepRatio({ ratio: 21/9, calculate: 'height' });
  }

  $( ".section-banner-style-one__box" ).each(function() {
    var height3 = $(this).children().children().children().next().next().children('.section-banner-style-one__caption').height() + 15;

    $(this).children().children().children('.section-banner-style-one__row').css('top', height3 + 'px');

    $(this).children('.section-banner-style-one__rectangle').hover(
        function() {
          $( this ).children().children('.section-banner-style-one__row').css('top', '0');
        }, function() {
          $( this ).children().children('.section-banner-style-one__row').css('top', height3 + 'px');
        }
    );
  });

  $( ".section-banner-style-two__box" ).each(function() {
    var height4 = $(this).children().children().next().children().children().next().next().children('.section-banner-style-two__inner').height() + 15;

    $(this).children().children().next().children().children('.section-banner-style-two__row').css('top', height4 + 'px');

    $(this).children('.section-banner-style-two__img').hover(
        function() {
          $( this ).children().next().children().children('.section-banner-style-two__row').css('top', '0');
        }, function() {
          $( this ).children().next().children().children('.section-banner-style-two__row').css('top', height4 + 'px');
        }
    );
  });

  $( ".section-banner-style-seven__box" ).each(function() {
    var height1 = $(this).children().children().children().height();
    var height2 = $(this).children().children().children().next().children().next().children('.section-banner-style-seven__inner').height() + 15;

    $(this).children().children('.section-banner-style-seven__icon').css('bottom', -height2 + 'px');

    $(this).children().children('.section-banner-style-seven__icon').hover(
        function() {
          $( this ).css('bottom', height1 + 'px');
        }, function() {
          $( this ).css('bottom', -height2 + 'px');
        }
    );
  });

  $(
      ".section-banner-style-one__hover, .section-banner-style-two__hover, .section-banner-style-three__hover, .section-banner-style-eight__hover"
  ).click(function () {
    window.location = $(this).find("a").attr("href");
    return false;
  });

  $(".accordion:first-child").addClass("open");

  $(".accordion").accordion({
    transitionSpeed: 400,
  });

  $("#home-blog").prependTo("#home-contact-us");

  AOS.init({
    duration: 1200,
    delay: 300,
    once: true,
  });

  $(window).on("scroll", function () {
    AOS.init({
      duration: 1200,
      delay: 300,
      once: true,
    });
  });

  $('#home-about-us .section-fifty-fifty-container__column:first-child').attr('data-aos', 'fade-right');
  $('#home-about-us .section-fifty-fifty-container__column:last-child').attr('data-aos', 'fade-left');
  $('#trust-us .section__row').attr('data-aos', 'fade-up');
  $('#uslugi .container').attr('data-aos', 'fade-up');
  $('#opinie .section__row').attr('data-aos', 'fade-up');
  $('#home-blog .container').attr('data-aos', 'fade-up');
  $('#home-contact-us .container:last-child').attr('data-aos', 'fade-up');

  document.addEventListener('wpcf7mailsent', e => {
    gtag('event', 'conversion', {
        send_to: 'AW-11120266163/iY33CJaq4dkaELOXx7Yp',
        value: 1.0,
        currency: 'CONTACT_FORM'
    });
  });
  for (let mailto of document.querySelectorAll("[href^='mailto:']")) {
    mailto.addEventListener('click', e => {
        const clickTarget = mailto.matches(".hot-menu a") ? "FOOTER" : mailto.matches(".header a") ? "HEADER" : "CONTENT";
        gtag("event", "conversion", {
          send_to: 'AW-11120266163/eHWfCJOq4dkaELOXx7Yp',
          value: 1.0,
          currency: `MAIL_CLICK_${clickTarget}`
        });
    });
  }
  for (let tel of document.querySelectorAll("[href^='tel:']")) {
    tel.addEventListener('click', e => {
        const clickTarget = tel.matches(".hot-menu a") ? "FOOTER" : tel.matches(".header a") ? "HEADER" : "CONTENT";
        gtag("event", "conversion", {
          send_to: 'AW-11120266163/OFGtCJCq4dkaELOXx7Yp',
          value: 1.0,
          currency: `PHONE_CLICK_${clickTarget}`
        });
    });
  }

});
