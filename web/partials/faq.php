<section class="section__container">
    <div class="section__content-full faq" id="faq">
        <div class="faq__main">
            <header class="faq__header">
                <h1 class="faq__header-title">Faq</h1>
            </header>
            <div class="faq__search-bar">
                <input type="search" placeholder="Search" v-model="searchTerm" aria-label="Search FAQs">
                <div class="faq__search-bar-error" v-if="searchError">No Results</div>
            </div>
            <div class="faq__questions-container">
                <div v-for="parentTopic in displayedFaqs">
                    <h2 class="faq__questions-title header5" v-html="parentTopic.topicDisplay">title</h2>
                    <ul class="faq__items">
                        <li class="faq__item" v-for="item in parentTopic.qa">
                            <button type="button" class="faq__question" v-bind:aria-controls="item.id" v-bind:data-topic-id="item.topicId" v-html="item.question" v-on:click="expandToggle(item.id, $event)" data-after-icon="accordion">FAQ Content</button>
                            <div class="faq__answer" v-bind:id="item.id" v-html="item.answer"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <aside class="faq__sidebar">
            <div class="faq__sidebar-section">
                <button class="header5 faq__sidebar-section-title" v-on:click="clearTopic"><span class="header5 faq__sidebar-section-title-text" v-html="sidebarButtonText">Topics</span></button>
                <ul class="faq__sidebar-section-items">
                    <li class="faq__sidebar-section-item" v-for="topic in topics">
                        <button type="button"  class="faq__sidebar-section-item-button" v-bind:id="topic.id" v-html="topic.displayName" v-on:click="topicSwitch(topic.id)">topic</button>
                    </li>
                </ul>
            <button class="faq__clear" v-on:click="clearTopic" v-if="buttonDisplay">Back to all FAQs</button>
            </div>
        </aside>
    </div>
</section>