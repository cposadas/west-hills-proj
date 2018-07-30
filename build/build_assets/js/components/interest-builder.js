
 if(document.querySelector('#interest-builder') !== null ){
  let InterestBuilder = new Vue({
    el: '#interest-builder',
    data: {
      ajaxUrl: '/_resources/php/programs/program-listing.php',
      ajaxMethod: 'GET',
      programData: [],
      sortedResults: [],
      stepTwo: false,
      showResults: false,
      filterLocation: 'All',
      filterDegree: 'All',
      displayDegrees: { 'AA': 'AA Degree', 'AS-T': 'AS-T Degree', 'AS': 'AS Degree', 'C': 'Certificate', 'LC': 'Local Certificate', 'L': 'Licensure', 'AA-T': 'AA-T Degree', 'ICP': 'Industry Certification Prep' },
      displayLocations: {'C': 'Coalinga', 'D': 'District', 'L': 'Lemoore', 'O': 'Online'},
      likes: [],
      studies: [],
      pageDisplayOptions: [10,20,50],
      pageDisplay: 20,
      currentPage: 1,
      prevButtonDisabled: true,
      nextButtonDisabled: false
    },
    computed: {
      displayedResults: function() {
        let end = this.currentPage * this.pageDisplay;
        let start = end - this.pageDisplay;
        if(this.programData.length > 0){
          return this.programData.slice(start, end - 1);
        } else {
          return [];
        }
      },
      displayedRange: function() {
        let end = this.currentPage * this.pageDisplay;
        let start = (end - this.pageDisplay) + 1;
        if(end > this.programData.length)
        {
          end = this.programData.length;
        }
        return start+"-"+end;
      },
      queryData: function() {
        let data = {};
        data.likes = this.likes;
        data.studies = this.studies;
        return data;
      }
    },

    watch: {
      pageDisplay: function() {
        this.currentPage = 1;
        this.prevButtonDisabled = true;
        this.nextButtonDisabled = false;
      },

      filterLocation: function() {
        this.programData = this.filterResults();

      },

      filterDegree: function() {
        this.programData = this.filterResults();
      }
    },

    methods: {
      getData: function() {
        $.ajax({
          method: this.ajaxMethod,
          url: this.ajaxUrl,
          data: this.queryData
        })
        .done(function(data) {
          InterestBuilder.processData(data);
        })
        .fail(function(error) {
            console.error("error", error.statusText);
        })
        .always(function() {
          this.showResults = true;
        });
      },

      processData: function(data) {
        this.showResults = true;
        this.sortedResults = data.results;
        this.sortedResults.sort(function(a, b) {
          let nameA = a.program.toUpperCase();
          let nameB = b.program.toUpperCase();
          if (nameA < nameB) {
            return -1;
          }
          if (nameA > nameB) {
            return 1;
          }
          return 0;
        });
        this.programData = this.sortedResults;
      },

      nextStep: function() {
        this.stepTwo = true;
        setTimeout(function(){
          let top = $("#nextStepButton").offset().top;
          let scrollPosition = top;
          $('html, body').animate({
              scrollTop: scrollPosition
          }, 500);
        }, 150);
      },

      submitForm: function() {
        this.getData();
        setTimeout(function(){
          let top = $("#submitFormButton").offset().top;
          let scrollPosition = top;
          $('html, body').animate({
              scrollTop: scrollPosition
          }, 500);
        }, 150);
      },

      filterResults: function() {
        let filtered = [];

        filtered = this.sortedResults.filter( (item) => {
          let location = false;
          let degree = false;
          if(InterestBuilder.filterLocation != 'All') {
            if(item.campus === InterestBuilder.filterLocation) {
              location = true;
            }
          } else {
            location = true;
          }

          if(InterestBuilder.filterDegree != 'All' && location) {
            if(item.degrees.indexOf(InterestBuilder.filterDegree) > -1) {
              degree = true;
            }
          } else {
            degree = true
          }

          if(location && degree) {
            return item;
          }
        });
        return filtered;
      },

      nextPage: function() {
        let max = this.programData.length;
        let end = this.currentPage * this.pageDisplay;
        let start = (end - this.pageDisplay) + 1;
        if(end < max) {
          this.currentPage++;
          this.prevButtonDisabled = false;
        } else {
          this.nextButtonDisabled = true;
        }

      },

      previousPage: function() {
        let end = this.currentPage * this.pageDisplay;
        let start = (end - this.pageDisplay) + 1;
        if(start > 1) {
          this.currentPage--;
          this.nextButtonDisabled = false;
        } else {
          this.prevButtonDisabled = true;
        }
      },
      reset: function(){
        this.likes = [];
        this.studies = [];
        this.showResults = false;
        this.stepTwo = false;
        let target = $('#interest-builder');
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    }
  });
 }