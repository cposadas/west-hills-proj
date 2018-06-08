
if(document.querySelector('#dropdown-grid') !== null ){
//main vue instance
  let DropDownGrid = new Vue({
    el: '#dropdown-grid',
    data: {
      elements: document.getElementsByClassName('interest-grid__item-wrapper'),
      dropdowns: document.getElementsByClassName('interest-grid__dropdown-column-container'),
      dropDownHeights: []
      
    },

    watch: {
      heightsUpdated: function(){

      }
    },

    mounted: function() {
      this.getDropdownHeights();
    },

    methods: {
      dropdownToggle: function(event){
        let baseElement = event.target.parentElement.parentElement;
        let isOpen= false;
        if(!baseElement.classList.contains('interest-grid__item-wrapper')) {
          baseElement = baseElement.parentElement;
          if(!baseElement.classList.contains('interest-grid__item-wrapper')) {
            baseElement = baseElement.parentElement;
          }
        }
        if(baseElement.classList.contains('--open')) {
          isOpen = true;
        }
        for(let i = 0; i < this.elements.length; i++) {
          this.elements[i].classList.remove('--open');
          this.elements[i].style.height = 'auto';
        }
        let baseHeight = baseElement.offsetHeight;
        if(!isOpen) {
          baseElement.classList.toggle('--open');
          baseElement.style.height = (parseInt(baseElement.dataset.dropdownHeight) + baseHeight + 40) + 'px';
        } else {
          baseElement.style.height = 'auto';
        }
      },

      getDropdownHeights: function(){
        let heights = [];
        let dropdowns = document.getElementsByClassName('interest-grid__dropdown');
        for(let i = 0; i < dropdowns.length; i++){
          dropdowns[i].classList.add('--hidden');
        }
        window.requestAnimationFrame(function(){
          for(let i = 0; i < DropDownGrid.dropdowns.length; i++) {
            let dheight = DropDownGrid.dropdowns[i].offsetHeight;
            DropDownGrid.dropdowns[i].style.height = (dheight + 40)+'px';
            DropDownGrid.elements[i].setAttribute('data-dropdown-height', dheight + 40);
            heights.push(dheight);
          }
          window.requestAnimationFrame(function() {
            for(let i = 0; i < dropdowns.length; i++){
              dropdowns[i].classList.remove('--hidden');
            }
          });
        });
        this.dropDownHeights = heights;
      }

    }
  });
}