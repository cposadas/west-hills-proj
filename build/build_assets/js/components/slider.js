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