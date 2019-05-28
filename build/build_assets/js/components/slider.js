import $ from "jquery";
require('slick-carousel');

$('.js-hero-slider').slick({
  dots: true,
  arrows: true
});

$('.js-image-slider').slick({
  dots: true,
  arrows: false
});

$('.slick-dots').each(function() {
  var dots = $(this).find('.slick-active');
  dots.attr('role', 'tab');
  dots.attr('aria-selected','undefined');
  dots.attr('aria-selected','undefined');
  dots.removeAttr('aria-controls');
});

$('.slick-magazine-responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});