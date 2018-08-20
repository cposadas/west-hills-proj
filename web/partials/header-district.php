<header class="header js-header" id="header">
   <div class="header__top-bar"><a href="/district/" class="header__logo"><img src="/_resources/svg/West-Hills-College-District.svg" alt="West Hills College District" class="header__logo-image"></a><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__mobile-toggle" aria-controls="main-nav" aria-label="main nav mobile toggle" data-icon="drawer" v-on:click="menuToggle"></button><div xmlns:v-on="http://omniupdate.com/XSL/Variables" class="header__selector" id="site-select" v-on:focusout="checkFocusSelect"><button class="header__selector-current" data-icon="mini-nav-drop-down" tabindex="0" v-on:focus="openList" v-on:click="openList" aria-controls="site-select-list">District</button><ul class="header__selector-list js-site-select-list" id="site-select-list">
            <li class="header__selector-item"><a href="/" class="header__selector-link" data-focus-parent="site-select">Home</a></li>
            <li class="header__selector-item"><a href="/coalinga/" class="header__selector-link" data-focus-parent="site-select">Coalinga</a></li>
            <li class="header__selector-item"><a href="/lemoore/" class="header__selector-link" data-focus-parent="site-select">Lemoore</a></li>
            <li class="header__selector-item"><a href="/firebaugh/" class="header__selector-link" data-focus-parent="site-select">Firebaugh</a></li>
         </ul>
      </div>
      <div class="header__login"><a href="/portal/" class="header__login-link" data-icon="login">myWestHills</a></div>
      <div class="header__class-search"><a href="/schedule/" class="header__class-search-link" data-icon="book-3"></a></div>
      <div class="header__search"><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__search-button js-header-search" aria-label="Search Display" data-icon="search-form" v-on:click="searchToggle"></button></div>
      <div class="header__cta"><a href="/admissions/" class="header__cta-link">Apply Now</a></div>
   </div>
   <nav xmlns:v-on="http://omniupdate.com/XSL/Variables" class="main-nav js-main-nav" id="main-nav" v-on:focusout="checkFocusMainNav" title="main navigation" aria-label="main navigation">
      <form action="/search.php" class="main-nav__mobile-search"><input name="q" type="search" class="main-nav__mobile-search-input" aria-label="search input" placeholder="Search"><input type="hidden" name="location" value=""><button type="submit" class="main-nav__mobile-search-submit" aria-label="search submit" data-icon="search-header"></button></form><a href="/portal/" class="main-nav__mobile-login" data-icon="login" data-after-icon="arrow">myWestHills</a><a href="/schedule/" class="main-nav__class-search" data-icon="book-3" data-after-icon="arrow">Course Schedule</a><ul class="main-nav__items">
         <li class="main-nav__item"><a href="/district/about/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">About</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="About" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">About</button><div class="main-nav__item-dropdown js-dropdown" id="About">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">The District</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">About WHCCD</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/history.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">History</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/faculty-and-staff-directory/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Faculty&nbsp;&amp;&nbsp;Staff Directory</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/strategic-plans.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Strategic Plan</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">&nbsp;</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/jobs-at-whc/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Jobs at WHC</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/maps-and-directions.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Maps &amp; Directions</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/resources/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Resources</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/bond-measures/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Bond Measures</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/district/administration/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Administration</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Administration" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Administration</button><div class="main-nav__item-dropdown js-dropdown" id="Administration">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Leadership</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/administration/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Administration at WHCCD</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/administration/administrators.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Administrators</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/administration/board-of-trustees/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Board of Trustees</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/administration/chancellor/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Chancellor</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/district/community/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Community</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Community" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Community</button><div class="main-nav__item-dropdown js-dropdown" id="Community">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Community</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/community/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">West Hills Community</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/skill-building/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Community Education</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/contract-training/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Contract Training</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/wit/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Westside Institute of Technology</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/district/departments/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Departments</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Departments" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Departments</button><div class="main-nav__item-dropdown js-dropdown" id="Departments">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Departments</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Administrative Departments at WHCCD</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/business-services/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Business Services</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/child-development-center/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Child Development Center</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">&nbsp;</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/educational-services-and-workforce-development/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Educational Services and Workforce Development</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/human-resources/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Human Resources</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/departments/institutional-effectiveness/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Institutional Effectiveness</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/district/foundation/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Foundation</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Foundation" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Foundation</button><div class="main-nav__item-dropdown js-dropdown" id="Foundation">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Foundation</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/foundation/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Foundation at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/foundation/foundation-board/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Foundation Board</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/foundation/alumni-directory/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">West Hills Alumni </a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">&nbsp;</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/foundation/giving-and-donations/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Giving &amp; Donations</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/foundation/scholarships/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Scholarships</a></li>
                  </ul>
               </div>
            </div>
         </li>
      </ul>
   </nav>
</header>