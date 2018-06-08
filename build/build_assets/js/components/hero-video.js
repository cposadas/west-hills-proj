/**
 * Manages the math required to create a b-roll video
 */
import $ from "jquery";

let heroVideo = (function() {
  // Set up some house keeping first
  let videoContainer = $(".js-hero-video-container");
  let player = $(".js-hero-video");
  let width = 0;
  let height = 0;
  let overlay = $(".hero-video__overlay");

  let cover = function() {
    if (width >= height) {
      var heightCheck = width * (9 / 16);
      if (heightCheck > height) {
        setWidth();
      } else {
        setHeight();
      }
    } else {
      setHeight();
    }
  };

  let setHeight = function() {
    var leftOffset = (width - height / (9 / 16)) / 2;
    player.width = height / (9 / 16);
    player.height = height;
    $(".js-hero-video").width(height / (9 / 16));
    $(".js-hero-video").height(height);
    $(".js-hero-video").css({ top: "0px" });
    $(".js-hero-video").css({ left: leftOffset });
  };

  let setWidth = function() {
    var topOffset = (height - width * (9 / 16)) / 2;
    player.width = width;
    player.height = width * (9 / 16);
    $(".js-hero-video").width(width);
    $(".js-hero-video").height(width * (9 / 16));
    $(".js-hero-video").css({ top: topOffset });
    $(".js-hero-video").css({ left: "0px" });
  };

  let bindEvents = function() {
    $(window).on(
      "resize",
      window.debounce(function() {
        resize();
      }, 30)
    );
  };

  let resize = function() {
    width = videoContainer[0].offsetWidth;
    height = videoContainer[0].offsetHeight;
    cover();
  };

  let init = function() {
    if (videoContainer.length && player.length) {
      width = videoContainer[0].offsetWidth;
      height = videoContainer[0].offsetHeight;
      cover();
      bindEvents();
      setTimeout(function() {
        overlay.addClass("--active");
        console.log("fade");
      }, 1000);
    }
  };

  return {
    init: init,
    resize: resize
  };
})();

// Start the party off. We have init() and reize() available for use
heroVideo.init();
