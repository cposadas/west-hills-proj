<header class="header js-header" id="header">
   <div class="header__top-bar"><a href="/" class="header__logo"><img src="/_resources/svg/West-Hills-College-Main.svg" alt="West Hills College" class="header__logo-image"></a><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__mobile-toggle" aria-controls="main-nav" aria-label="main nav mobile toggle" data-icon="drawer" v-on:click="menuToggle"></button><div xmlns:v-on="http://omniupdate.com/XSL/Variables" class="header__selector" id="site-select" v-on:focusout="checkFocusSelect"><button class="header__selector-current" data-icon="mini-nav-drop-down" tabindex="0" v-on:focus="openList" v-on:click="openList" aria-controls="site-select-list">Home</button><ul class="header__selector-list js-site-select-list" id="site-select-list">
            <li class="header__selector-item"><a href="/coalinga/" class="header__selector-link" data-focus-parent="site-select">Coalinga</a></li>
            <li class="header__selector-item"><a href="/lemoore/" class="header__selector-link" data-focus-parent="site-select">Lemoore</a></li>
            <li class="header__selector-item"><a href="/firebaugh/" class="header__selector-link" data-focus-parent="site-select">Firebaugh</a></li>
            <li class="header__selector-item"><a href="/district/" class="header__selector-link" data-focus-parent="site-select">District</a></li>
         </ul>
      </div>
      <div class="header__login"><a href="/portal/" class="header__login-link" data-icon="login">myWestHills</a></div>
      <div class="header__class-search"><a href="/schedule/" class="header__class-search-link" data-icon="book-3"></a></div>
      <div class="header__search"><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__search-button js-header-search" aria-label="Search Display" data-icon="search-form" v-on:click="searchToggle"></button></div>
      <div class="header__cta"><a href="/admissions/" class="header__cta-link">Apply Now</a></div>
   </div>
   <nav xmlns:v-on="http://omniupdate.com/XSL/Variables" class="main-nav js-main-nav" id="main-nav" v-on:focusout="checkFocusMainNav" title="main navigation" aria-label="main navigation">
      <form action="/search.php" class="main-nav__mobile-search"><input name="q" type="search" class="main-nav__mobile-search-input" aria-label="search input" placeholder="Search"><input type="hidden" name="location" value=""><button type="submit" class="main-nav__mobile-search-submit" aria-label="search submit" data-icon="search-header"></button></form><a href="/portal/" class="main-nav__mobile-login" data-icon="login" data-after-icon="arrow">myWestHills</a><a href="/schedule/" class="main-nav__class-search" data-icon="book-3" data-after-icon="arrow">Course Schedule</a><ul class="main-nav__items">
         <li class="main-nav__item"><a href="/academics/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Academics</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Academics" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Academics</button><div class="main-nav__item-dropdown js-dropdown" id="Academics">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/browse-by-interest/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Browse by Interest</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/degrees-and-certificates/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Browse by Degrees</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/coalinga/degrees-and-certificates/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Programs at Coalinga</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/degrees-and-certificates/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Programs at Lemoore</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Academic Resources</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academics at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/schedule/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Course Schedule</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/college-101/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">College 101</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/academic-calendar/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Calendar</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/admissions/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Admissions</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Admissions" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Admissions</button><div class="main-nav__item-dropdown js-dropdown" id="Admissions">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Getting Started</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Future Students</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/returning-students/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Returning Students</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/why-whc.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Why West Hills College</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/faqs.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Frequently Asked Questions</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/ask-an-advisor.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Ask an Advisor</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Paying for College</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/cost-of-attendance/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Cost of Attendance</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/financial-aid/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Financial Aid</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/admissions/grants-and-scholarships/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Grants &amp; Scholarships</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/about/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">About</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="About" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">About</button><div class="main-nav__item-dropdown js-dropdown" id="About">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Who We Are</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">About West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/faculty-and-staff-directory/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Faculty &amp; Staff Directory</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/jobs-at-whc/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Careers at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/maps-and-directions.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Maps &amp; Directions</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/contact-us/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Contact Us</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">What's Happening</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/news-and-events/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">News &amp; Events</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/blog/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Spotlight Blog</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/events/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Upcoming events</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/magazine/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">West Hills Magazine</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/information-for/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Information For</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Information For" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Information For</button><div class="main-nav__item-dropdown js-dropdown" id="Information For">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">By College &amp; Location</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/coalinga/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Coalinga College</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Lemoore College</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/firebaugh/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Firebaugh Campus</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">District Office</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">People</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/working-adults/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Working Adults</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/information-for/alumni.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Alumni</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Faculty &amp; Staff</a></li>
                  </ul>
               </div>
            </div>
         </li>
      </ul>
   </nav>
</header>