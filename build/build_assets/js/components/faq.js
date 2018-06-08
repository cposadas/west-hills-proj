import lunr from 'lunr';

if(document.querySelector('#faq') !== null ){
//main vue instance
  let Faq = new Vue({
    el: '#faq',
    data: {
      ajaxEndpoint: 'assets/js/data/faq.json',
      rawData: [],
      searchIndex: [],
      processedData: [],
      topics: [],
      itemsToDisplay: [],
      searchTerm: '',
      currentTopic: '',
      lunrIndex: '',
      searchError: false,
      buttonDisplay: false
    },
    computed: {
      displayedFaqs: function() {
        return this.itemsToDisplay;
      },
      sidebarButtonText: function() {
        if(this.buttonDisplay) {
          return 'Programs';
        } else {
          return 'Topics';
        }
      }
    },

    beforeCreate: function() {

    },
    mounted: function() {
      this.getData();
    },

    watch: {
      searchTerm: function() {
        this.searchError = false;
        this.buttonDisplay = false;
        if(this.searchTerm != ''){
          this.runSearch();
        }
      },
      currentTopic: function() {
        this.buttonDisplay = false;
        this.topicFilter(this.currentTopic);
        if(this.currentTopic === 'programs') {
          this.buttonDisplay = true;
        }
      }
    },

    methods: {
      getData: function() {
        $.ajax(this.ajaxEndpoint, {
          success: function(data) {
            Faq.processData(data);
          },
          error: function(error) {
            console.error("error",error);
          },
          complete: function() {
          }
        })
      },

      processData: function(data) {
        this.rawData = data.results;
        this.buildTopicData();
        this.buildSearchIndex();
        this.initialDisplay();
      },

      initialDisplay: function() {
        let currentTopic = '';
        let topicDisplay = [];
        for(let i = 0; i < this.rawData.length; i++) {

          let currentTopic = {};
          currentTopic.topicDisplay = this.rawData[i].topicDisplay;
          currentTopic.topic = this.rawData[i].topic;
          let currentTopicItems = [];
          if(this.rawData[i].qa) {
            for( let x = 0; x < this.rawData[i].qa.length; x++) {
              let indexItem = {};
              indexItem.answer = this.rawData[i].qa[x].answer;
              indexItem.question = this.rawData[i].qa[x].question;
              indexItem.topicId = currentTopic.topic;
              indexItem.id = currentTopic.topic+x;
              indexItem.parentTopic = '';
              currentTopicItems.push(indexItem);
            }
          }

          if(this.rawData[i].subTopics) {
            currentTopic.subTopics = [];
            for( let x = 0; x < this.rawData[i].subTopics.length; x++) {
              let subTopicItem = {};
              subTopicItem.topicDisplay = this.rawData[i].subTopics[x].subTopicDisplay;
              subTopicItem.topic = this.rawData[i].subTopics[x].subTopic;
              subTopicItem.qa = [];
              for( let y = 0; y < this.rawData[i].subTopics[x].subQa.length; y++) {
                let subTopicItemQa = {};
                subTopicItemQa.answer = this.rawData[i].subTopics[x].subQa[y].answer;
                subTopicItemQa.question = this.rawData[i].subTopics[x].subQa[y].question;
                subTopicItemQa.topicId = subTopicItem.topic;
                subTopicItemQa.id = subTopicItem.topic+y;
                subTopicItemQa.parentTopic = currentTopic.topic;
                subTopicItem.qa.push(subTopicItemQa);
              }
              currentTopic.subTopics.push(subTopicItem);
            }
          }

          currentTopic.qa = currentTopicItems;
          topicDisplay.push(currentTopic);
        }

        this.processedData = topicDisplay;
        this.currentTopic = topicDisplay[0].topic;
      },

      buildTopicData: function() {
        for(let i = 0; i < this.rawData.length; i++) {
          let topic = {};
          topic.id = this.rawData[i].topic;
          topic.displayName = this.rawData[i].topicDisplay;
          this.topics.push(topic);
        }
      },

      buildSearchIndex: function() {
        let currentTopic = '';
        this.searchIndex = [];
        for(let i = 0; i < this.rawData.length; i++) {
          let currentTopic = this.rawData[i].topic;
          if(this.rawData[i].qa) {
            for( let x = 0; x < this.rawData[i].qa.length; x++) {
              let indexItem = {};
              indexItem.answer = this.rawData[i].qa[x].answer;
              indexItem.question = this.rawData[i].qa[x].question;
              indexItem.topicId = currentTopic;
              indexItem.id = currentTopic+x;
              this.searchIndex.push(indexItem);
            }
          }
        }

        this.indexSearchArray();
      },

      indexSearchArray: function() {
        let index = lunr(function(){
          this.field('answer');
          this.field('question');
          this.ref('id');
          let lunrThis = this;
          Faq.searchIndex.forEach(function(item) {
            lunrThis.add(item);
          });
        });
        this.lunrIndex = index;
      },

      topicFilter: function(topicId) {
        this.itemsToDisplay = [];
        this.searchError = false;
        for( let i = 0; i < this.processedData.length; i++) {
          if(this.processedData[i].topic === 'programs' && this.processedData[i].topic === topicId) {
            this.programTopic(i);
          } else if(this.processedData[i].topic === topicId) {
            this.itemsToDisplay.push(this.processedData[i]);
          } else if(this.processedData[i].subTopics) {
            for(let x = 0; x < this.processedData[i].subTopics.length; x++) {
              if(this.processedData[i].subTopics[x].topic === topicId) {
                this.itemsToDisplay.push(this.processedData[i].subTopics[x]);
                this.buttonDisplay = true;
              }
            }
          }
        }
      },

      searchFilter: function(searchedIds) {
        this.itemsToDisplay = [];
        let currentTopic = '';
        let searchedDisplay = [];

        this.processedData.forEach(function(topicItem) {
          let matchedTopic = {};
          let matchedQa = [];
          let matchedIds = [];
          topicItem.qa.forEach(function(qaItem) {

            searchedIds.forEach(function(id) {
              if(qaItem.id === id) {
                matchedIds.push(qaItem);
              }
            });
          });
          if(matchedIds.length > 0) {
            matchedTopic.topic = topicItem.topic;
            matchedTopic.topicDisplay = topicItem.topicDisplay;
            matchedTopic.qa = matchedIds;
            searchedDisplay.push(matchedTopic);
          }
        });

        this.itemsToDisplay = searchedDisplay;
        if(this.itemsToDisplay.length < 1 ) {
          this.searchError = true;
        }
      },

      expandToggle: function(questionId, event) {
        let selector = '#'+questionId;
        let toggledElement = document.querySelector(selector);
        toggledElement.classList.toggle('--open');
        event.target.classList.toggle('--open');
      },

      topicSwitch: function(topicId) {
        this.searchTerm = '';
        this.currentTopic = topicId;
      },

      clearTopic: function() {
        this.itemsToDisplay = [];
        this.topics = [];
        this.currentTopic = '';
        setTimeout(function() {
          Faq.currentTopic = Faq.processedData[0].topic;
        }, 10);
        this.buildTopicData();
        this.buttonDisplay = false;
      },

      programTopic: function(programPosition) {
        this.buttonDisplay = true;
        let subItems = this.processedData[programPosition].subTopics;
        this.itemsToDisplay.push(subItems[0]);
        this.topics = [];
        for(let i = 0; i < subItems.length; i++) {
          let topic = {};
          topic.id = subItems[i].topic;
          topic.displayName = subItems[i].topicDisplay;
          this.topics.push(topic);
        }
      },

      runSearch: debounce(function(){
        let searchData = this.lunrIndex.search(this.searchTerm);
        let searchIds = [];
        if(searchData.length > 0) {
          searchData.forEach(function(lunrItem){
            searchIds.push(lunrItem.ref);
          });
          this.searchFilter(searchIds);
        } else {
          if(this.searchTerm.length > 0) {
            this.searchError = true;
          }
          this.clearTopic();
        }
      }, 500)
    }
  });
}