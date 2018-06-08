
 if(document.querySelector('#video-blocks') !== null ){
  let InterestBuilder = new Vue({
    el: '#video-blocks',
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
        console.log(this.setId(e.currentTarget.dataset.videoId));
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