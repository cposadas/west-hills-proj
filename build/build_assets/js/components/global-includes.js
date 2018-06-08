Vue.directive("image", {
  bind: function(el, binding, vnode) {
    if (el.querySelector("img")) {
      el.querySelector("img").addEventListener("load", function() {
        let imageTag = el.querySelector("img");
        let imageSrc = imageTag.src;
        let imageCurrentSrc = imageTag.currentSrc;
        if (imageCurrentSrc) {
          el.style.backgroundImage = "url(" + imageCurrentSrc + ")";
        } else {
          el.style.backgroundImage = "url(" + imageSrc + ")";
        }
      });
    }
  }
});