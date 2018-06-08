<header class="header js-header" id="header">
    <div class="header__top-bar">
        <a href="/" class="header__logo">
            <img src="assets/svg/West-Hills-College-Main.svg" alt="West Hills College" class="header__logo-image">
        </a>
        <button type="button" class="header__mobile-toggle" aria-controls="main-nav" aria-label="main nav mobile toggle" data-icon="drawer" v-on:click="menuToggle"></button>
        <div class="header__selector" id="site-select" v-on:focusout="checkFocusSelect">
            <button class="header__selector-current" data-icon="mini-nav-drop-down" tabindex="0" v-on:focus="openList" v-on:click="openList" aria-controls="site-select-list">Home</button>
            <ul class="header__selector-list js-site-select-list" id="site-select-list">
                <li class="header__selector-item"><a href="#" class="header__selector-link" data-focus-parent="site-select">Coalinga</a></li>
                <li class="header__selector-item"><a href="#" class="header__selector-link" data-focus-parent="site-select">Lemoore</a></li>
                <li class="header__selector-item"><a href="#" class="header__selector-link" data-focus-parent="site-select">NDC</a></li>
                <li class="header__selector-item"><a href="#" class="header__selector-link" data-focus-parent="site-select">District</a></li>
            </ul>
        </div>
        <div class="header__login">
            <a href="#" class="header__login-link" data-icon="login">myWestHills</a>
        </div>
        <div class="header__search">
            <button type="button" class="header__search-button js-header-search" aria-label="Search Display" data-icon="search-form" v-on:click="searchToggle"></button>
        </div>
        <div class="header__cta">
            <a href="#" class="header__cta-link">Apply Now</a>
        </div>
    </div>
    <nav class="main-nav js-main-nav" id="main-nav" v-on:focusout="checkFocusMainNav" title="main navigation" aria-label="main navigation">
        <form action="/s" class="main-nav__mobile-search">
            <input type="search" class="main-nav__mobile-search-input" aria-label="search input" placeholder="Search">
            <button type="submit" class="main-nav__mobile-search-submit" aria-label="search submit" data-icon="search-header"></button>
        </form>
        <a href="#" class="main-nav__mobile-login" data-icon="login" data-after-icon="arrow">myWestHills</a>
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="#" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Academics</a>
                <button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Academics" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Academics</button>
                <div class="main-nav__item-dropdown js-dropdown" id="Academics">
                    <a href="#" class="main-nav__item-mobile-link" data-focus-parent="main-nav" data-after-icon="arrow">Academics overview</a>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="video-page.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Video Hero</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="404.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">404</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="degree-certificates.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Degrees and Certificates</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="degree-program.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Degrees program</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="emphasis.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">emphasis</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="events-listing.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">events listing</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="wizzywig.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">wizzywig</a></li>
                        </ul>
                    </div>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Academic resources</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="faq.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">faq</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="interests.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">interests</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="news-detail.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">news detail</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="news-events-hub.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">news events hub</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="people-listing.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">people listing</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="program-detail.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">program detail</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="main-nav__item">
                <a href="#" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Admissions</a>
                <button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Admissions" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Admissions</button>
                <div class="main-nav__item-dropdown js-dropdown" id="Admissions">
                    <a href="#" class="main-nav__item-mobile-link" data-focus-parent="main-nav" data-after-icon="arrow">Admissions overview</a>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="index-coalinga.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">coalinga</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="index-lemoore.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">lemoore</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="search.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">search</a></li>
                        </ul>
                    </div>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Academic resources</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="Interest-detail.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">interest detail</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="people-detail.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">people detail</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="content.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">content</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="main-nav__item">
                <a href="#" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">About</a>
                <button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="about" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">about</button>
                <div class="main-nav__item-dropdown js-dropdown" id="about">
                    <a href="#" class="main-nav__item-mobile-link" data-focus-parent="main-nav" data-after-icon="arrow">about overview</a>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="lemoore-patterns.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Lemoore</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="district-patterns.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">District</a></li>
                        </ul>
                    </div>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Academic resources</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="coalinga-patterns.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Coalinga</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="#" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Calendar</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="main-nav__item">
                <a href="#" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Locations</a>
                <button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="locations" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">locations</button>
                <div class="main-nav__item-dropdown js-dropdown" id="locations">
                    <a href="#" class="main-nav__item-mobile-link" data-focus-parent="main-nav" data-after-icon="arrow">locations overview</a>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="#" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Browse by Interest</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="#" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Degrees and Certificates</a></li>
                        </ul>
                    </div>
                    <div class="main-nav__item-dropdown-column">
                        <div class="main-nav__item-dropdown-column-title">Academic resources</div>
                        <ul class="main-nav__item-dropdown-column-items">
                            <li class="main-nav__item-dropdown-column-item"><a href="#" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Community Education</a></li>
                            <li class="main-nav__item-dropdown-column-item"><a href="#" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Calendar</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>
