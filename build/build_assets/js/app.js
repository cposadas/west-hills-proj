window.$ = require('jquery');
window.Vue = require('./vendor/vue.min');
require("picturefill");

// Taken from underscore.js
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
window.debounce = function(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

require('./components/global-includes');
require('./components/hero');
require('./components/header');
require('./components/slider');
require('./components/interest-builder');
require('./components/faq');
require('./components/dropdown-grid');
require('./components/hero-video');
require('./components/inline-faq');
require('./components/video-blocks');
require('./components/toybox-feedback');

require("popper.js");
require("bootstrap");