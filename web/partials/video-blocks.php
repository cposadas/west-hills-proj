<section class="section__container --color-fill-alt">
    <div class="section__content title-bar">
        <header class="title-bar__title">
            <h2 class="header3">
                featured videos
            </h2>
            <div class="title-bar__text">
                No matter where you are in the Central Valley, West Hills College has a location convenient to you.
            </div>
            <div class="title-bar__link">
                <a href="#" class="link__button-primary">see all</a>
            </div>
        </header>
    </div>
    <div class="section__content video-blocks" id="video-blocks">
        <div class="video-blocks__item" data-video-id="rEg6oeazTNY" v-on:click="videoDisplay" v-on:keyup.enter="videoDisplay" tabindex="0">
            <div class="video-blocks__content-container">
                <div class="video-blocks__content-image" style="background-image: url('https://via.placeholder.com/370x170')" data-icon="play"></div>
                <div class="video-blocks__content-title header6">Keller auto center supports the WHC president's scholars program</div>
            </div>
        </div>
        <div class="video-blocks__item" data-video-id="0weSjPKi4cs" v-on:click="videoDisplay" tabindex="0">
            <div class="video-blocks__content-container">
                <div class="video-blocks__content-image" style="background-image: url('https://via.placeholder.com/370x170')" data-icon="play"></div>
                <div class="video-blocks__content-title header6">Keller auto center supports the WHC president's scholars program</div>
            </div>
        </div>
        <div class="video-blocks__item" data-video-id="nn72FTYjIAY" v-on:click="videoDisplay" tabindex="0">
            <div class="video-blocks__content-container">
                <div class="video-blocks__content-image" style="background-image: url('https://via.placeholder.com/370x170')" data-icon="play"></div>
                <div class="video-blocks__content-title header6">Keller auto center supports the WHC president's scholars program</div>
            </div>
        </div>
        <div class="video-blocks__overlay" id="js-video-blocks-overlay">
            <div class="video-blocks__overlay-container">
                <button type="button" class="video-blocks__overlay-close" data-after-icon="close" v-on:click="videoClose" v-on:keyup.enter="videoClose">close</button>
                <div class="video-blocks__overlay-video" >
                    <iframe width="560" height="315" v-bind:src="videoUrl" allowfullscreen></iframe>
                </div>
                <div class="video-blocks__overlay-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, repellendus dolor sed earum repellat maiores praesentium! Enim nostrum, ut cumque assumenda iste, dolor voluptatem architecto nisi laudantium, consequuntur temporibus officiis!
                </div>
                <div class="video-blocks__overlay-button-container"><a href="#" class="link__button-primary">Apply to this program</a></div>
            </div>
        </div>
    </div>
</section>