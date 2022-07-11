"use strict";

$(function () {
  // header class on scroll 
  var header = $('.navbar-dark');
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();

    if (scroll > 500) {
      header.removeClass('.navbar-clear').addClass('navbar-black');
    } else {
      header.removeClass('navbar-black').addClass('navbar-clear');
    }
  }); //nav search toggle

  $(document).on('click', '.SearchNavToggle', function () {
    $(this).closest('.search-box').removeClass('collapsed');
    $(this).next().focus();
  });
  $(document).on('blur', '.search-box--nav', function () {
    $(this).addClass('collapsed');
  });
  $('.slider-article').slick({
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    responsive: [{
      breakpoint: 900,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    }, {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });
});