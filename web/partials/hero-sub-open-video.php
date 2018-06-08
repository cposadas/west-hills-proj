<section class="section__container" id="hero">
    <div class="section__content-full hero-sub">
        <div class="hero-sub__featured">
            <picture class="hero__image-container" v-image="">
                <source srcset="https://unsplash.it/700/905?image=838" media="(max-width: 640px)">
                <img src="https://unsplash.it/1920/565?image=838" class="hero__image" alt="">
            </picture>
            <div class="hero-sub__cta">
                <h1 class="hero-sub__title header1 --alt-color">Browse By Interest</h1>
                <div class="hero-sub__text">West Hills College</div>
                <a href="#" class="link__button-primary hero-sub__button" data-video-id="rEg6oeazTNY" v-on:click="videoDisplay" v-on:keyup.enter="videoDisplay" tabindex="0">Play video</a>
            </div>
            <div class="hero-sub__overlay"></div>
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