<section class="section__container --color-fill-alt">
    <div class="section__content-full title-bar">
        <header class="title-bar__title">
            <h2 class="header3">
                things you can study
            </h2>
            <div class="title-bar__locations">
                <div class="title-bar__location">
                    <div class="title-bar__circle">C</div>
                    <div class="title-bar__location-name">Coalinga</div>
                </div>
                <div class="title-bar__location">
                    <div class="title-bar__circle">L</div>
                    <div class="title-bar__location-name">Lemoore</div>
                </div>
                <div class="title-bar__location">
                    <div class="title-bar__circle">N</div>
                    <div class="title-bar__location-name">North District Center</div>
                </div>
                <div class="title-bar__location">
                    <div class="title-bar__circle">O</div>
                    <div class="title-bar__location-name">Online</div>
                </div>
            </div>
        </header>
    </div>
    <div class="section__content interest-grid" id="dropdown-grid">
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest-dropdown" v-on:click="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest-dropdown">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest2-dropdown" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="North District Center">N</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest2-dropdown">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest3-dropdown" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest3-dropdown">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest4-dropdown" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="Online">O</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest4-dropdown">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest-dropdown1" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest-dropdown1">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest2-dropdown1" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="North District Center">N</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest2-dropdown1">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest3-dropdown1" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest3-dropdown1">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest4-dropdown1" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="Online">O</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest4-dropdown1">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest-dropdown2" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest-dropdown2">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest2-dropdown2" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="North District Center">N</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest2-dropdown2">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest3-dropdown2" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Coalinga">C</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest3-dropdown2">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="interest-grid__item-wrapper">
            <div role="button" tabindex="0" class="interest-grid__item" aria-label="sub interest display toggle" aria-controls="sub-interest4-dropdown2" v-on:click.capture="dropdownToggle">
                <div class="interest-grid__item-content" style="background-image: url('http://placehold.it/300/300/');">
                    <div class="interest-grid__text">sub interest</div>
                    <div class="interest-grid__locations">
                        <div class="interest-grid__location" aria-label="Lemoore">L</div>
                        <div class="interest-grid__location" aria-label="Online">O</div>
                    </div>
                </div>
            </div>
            <div class="interest-grid__dropdown" id="sub-interest4-dropdown2">
                <div class="interest-grid__dropdown-column-container">
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC Coalinga</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">WHC lemoore</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">North District Center</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                    <div class="interest-grid__dropdown-column">
                        <h3 class="interest-grid__dropdown-column-title header5 --alt-color">online</h3>
                        <ul class="interest-grid__dropdown-column-items">
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                            <li class="interest-grid__dropdown-column-item">
                                <a href="#" class="interest-grid__dropdown-column-link">stuff</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="interest-grid__disclosure">Program Disclosures</a>
</section>
