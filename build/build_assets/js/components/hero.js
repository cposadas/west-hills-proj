// Do not delete this it is used for the background fill directive
if (document.querySelector("#hero")) {
  let Hero = new Vue({
    el: "#hero",
    name: "hero",

    data: {
      videoOverlay: '',
      videoId: '',
      videoBaseUrl: 'https://www.youtube.com/embed/'
    },
    computed: {
      videoUrl: function(){
        return this.videoBaseUrl + this.videoId;
      }
    },

    mounted: function() {
      this.videoOverlay = document.querySelector('#js-video-blocks-overlay');
    },

    methods: {
      videoDisplay: function(e) {
        this.setId(e.currentTarget.dataset.videoId);
        this.videoOverlay.classList.add('--open');
      },
      videoClose: function(e) {
        this.videoId = '';
        this.videoOverlay.classList.remove('--open');
      },

      setId: function(newVideoId){
        this.videoId = newVideoId;
      }
    }
  });
}