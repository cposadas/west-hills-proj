let MainNav = new Vue({
  el: '#header',
  data: {
    dropDowns: [],
    currentDrop: '',
    miniNavOpen: false,
    miniNavChanged: true,
    infoNavOpen: false,
    infoNavChanged: true
  },

  mounted: function() {
    var self = this;
    this.setDropdowns();
    // Shrink the header if scroll down ...after a certain point
    var previousScroll = 0;
    var mainNav = document.getElementsByClassName('js-main-nav');
    window.addEventListener('scroll', window.debounce(function() {
      var currentScroll = $(window).scrollTop();
      if( (previousScroll - currentScroll) < 1 && currentScroll > 200 ) {
        // Scrolling down so shrink it
        if(mainNav.length) mainNav[0].classList.add('--shrunk')
      } else {
        // Scrolling up so bring back the header
        if(mainNav.length) mainNav[0].classList.remove('--shrunk')
      }
      previousScroll = currentScroll;
    }, 200));
  },
  watch: {
    miniNavChanged: function() {
      this.toggleMini();
    },
    infoNavChanged: function() {
      this.toggleInfoMini();
    }
  },

  methods: {

  // main nav methods
    setDropdowns: function() {
      this.dropDowns = document.getElementsByClassName('js-dropdown');
    },
    topLinkFocus: function(e) {
      this.clearDropDowns();
      let dropdown = e.target.parentElement.lastChild;
      dropdown.classList.add('--open');
    },
    topLinkClick: function(e) {
      let activeElement =  document.activeElement;
      // Check if we clicked on an existing open drop down
      if( activeElement && activeElement.innerHTML == this.currentDrop ) {
        let sibling = $(activeElement).siblings('.js-dropdown');
        if(sibling.length) {
          sibling[0].classList.remove('--open');
          window.focus();
        }
      }
      // Set the current dropdown for the next click
      this.currentDrop = activeElement.innerHTML;
    },
    clearDropDowns: function() {
      let dropdowns = this.dropDowns;
      for( let item = 0; item < dropdowns.length; item++) {
        dropdowns[item].classList.remove('--open');
        dropdowns[item].classList.remove('--close');
      }
      $('.js-dropdown-button').removeClass('--open');
      $('.js-dropdown-button').removeClass('--close');
    },
    checkFocusMainNav: function(e) {
      window.requestAnimationFrame(()=> {
        let activeElement =  document.activeElement;
        activeElement = activeElement;
        if(activeElement.dataset.focusParent != 'main-nav'){
          this.clearDropDowns();
        }
      });
    },

    subNavToggle: function(e) {
      let currentClass = '';
      let dropdown = e.target.parentElement.lastChild;

      if(dropdown.classList.contains('--open')) {
        currentClass = "--close";
      } else {
        currentClass = "--open";
      }
      this.clearDropDowns();
      e.currentTarget.classList.add(currentClass)
      dropdown.classList.add(currentClass);
    },

  // site select dropdown methods

    containerFocus: function() {
      document.querySelector('.js-site-select-list').classList.add('--open');
    },

    openList: function() {
      if(this.miniNavChanged) {
        this.miniNavChanged = false;
      } else {
        this.miniNavChanged = true;
      }
    },

    closeList: function() {
      document.querySelector('.js-site-select-list').classList.remove('--open');
    },

    containerInfoFocus: function() {
      document.querySelector('.js-info-select-list').classList.add('--open');
    },

    openInfoList: function() {
      if(this.infoNavChanged) {
        this.infoNavChanged = false;
      } else {
        this.infoNavChanged = true;
      }
    },

    closeInfoList: function() {
      document.querySelector('.js-info-select-list').classList.remove('--open');
    },

    checkFocusSelect: function() {
      window.requestAnimationFrame(()=> {
        let activeElement =  document.activeElement;
        activeElement = activeElement;
        if(activeElement.dataset.focusParent != 'site-select') {
          this.closeList();
        }
      });
    },
    checkFocusInfoSelect: function() {
      window.requestAnimationFrame(()=> {
        let activeElement =  document.activeElement;
        activeElement = activeElement;
        if(activeElement.dataset.focusParent != 'info-select') {
          this.closeInfoList();
        }
      });
    },

    // mobile toggle

    menuToggle: function(event) {
      event.target.classList.toggle('--open');
      document.querySelector('.js-header').classList.toggle('--open');
      document.querySelector('.js-main-nav').classList.toggle('--open');
      document.querySelector('.js-site').classList.toggle('--open');
      document.querySelector('.js-main-content').classList.toggle('--open');
    },

    searchToggle: function() {
      document.querySelector('.js-footer-search').classList.toggle('--open');
      document.querySelector('#footer-search').focus();
    },

    toggleMini: debounce(function(){
      if(this.miniNavOpen) {
        document.querySelector('.js-site-select-list').classList.remove('--open');
        this.miniNavOpen = false;
      } else {
        document.querySelector('.js-site-select-list').classList.add('--open');
        this.miniNavOpen = true;
      }
    }, 150),

    toggleInfoMini: debounce(function(){
      if(this.miniNavOpen) {
        document.querySelector('.js-info-select-list').classList.remove('--open');
        this.miniNavOpen = false;
      } else {
        document.querySelector('.js-info-select-list').classList.add('--open');
        this.miniNavOpen = true;
      }
    }, 150)

  }

});

$(document).on('click', '.js-footer-search-toggle', function() {
  document.querySelector('.js-footer-search').classList.toggle('--open');
  document.querySelector('.js-header-search').focus();
});
