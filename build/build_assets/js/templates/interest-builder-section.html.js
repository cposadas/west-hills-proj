module.exports = `
      <section class="interest-builder__step">
          <div class="interest-builder__step-header">
              <div class="interest-builder__step-head">
                  <h3 class="interest-builder__step-title">{{ section.header }}</h3>
              </div>
              <fieldset>
                  <div class="interest-builder__step-choices">
                      <label class="interest-builder__step-choice" v-for="item in section.options">
                          <div class="interest-builder__step-checkbox-container" >
                              <div class="interest-builder__step-checkbox-overlay"></div>
                              <input type="checkbox" value="outdoors" class="interest-builder__step-checkbox" v-bind:value="item.name" v-on:change="test" v-model="checkedOptions">
                              <div class="interest-builder__step-checkbox-text">{{ item.displayName }}</div>
                              <div class="interest-builder__step-checkbox-check" data-icon="close"></div>
                          </div>
                      </label>
                  </div>
              </fieldset>
          </div>
          <div class="interest-builder__step-footer">
              <div class="interest-builder__step-footer-button-container">
                  <button type="button" class="interest-builder__step-footer-button">Continue</button>
              </div>
          </div>
      </section>
`