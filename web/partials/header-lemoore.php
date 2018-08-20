<header class="header js-header" id="header">
   <div class="header__top-bar"><a href="/lemoore/" class="header__logo"><img src="/_resources/svg/West-Hills-College-Lemoore.svg" alt="West Hills College Lemoore" class="header__logo-image"></a><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__mobile-toggle" aria-controls="main-nav" aria-label="main nav mobile toggle" data-icon="drawer" v-on:click="menuToggle"></button><div xmlns:v-on="http://omniupdate.com/XSL/Variables" class="header__selector" id="site-select" v-on:focusout="checkFocusSelect"><button class="header__selector-current" data-icon="mini-nav-drop-down" tabindex="0" v-on:focus="openList" v-on:click="openList" aria-controls="site-select-list">Lemoore</button><ul class="header__selector-list js-site-select-list" id="site-select-list">
            <li class="header__selector-item"><a href="/" class="header__selector-link" data-focus-parent="site-select">Home</a></li>
            <li class="header__selector-item"><a href="/coalinga/" class="header__selector-link" data-focus-parent="site-select">Coalinga</a></li>
            <li class="header__selector-item"><a href="/firebaugh/" class="header__selector-link" data-focus-parent="site-select">Firebaugh</a></li>
            <li class="header__selector-item"><a href="/district/" class="header__selector-link" data-focus-parent="site-select">District</a></li>
         </ul>
      </div>
      <div xmlns:v-on="http://omniupdate.com/XSL/Variables" class="header__selector" id="info-select" v-on:focusout="checkFocusInfoSelect"><button class="header__selector-current" data-icon="mini-nav-drop-down" tabindex="0" v-on:focus="containerInfoFocus" v-on:click="openInfoList" aria-controls="info-select-list">Information&nbsp;For</button><ul class="header__selector-list js-info-select-list" id="info-select-list">
            <li class="header__selector-item"><a href="/lemoore/working-adults/" class="header__selector-link" data-focus-parent="info-select">Working Adults</a></li>
            <li class="header__selector-item"><a href="/lemoore/career-focused/" class="header__selector-link" data-focus-parent="info-select">Career Focused</a></li>
            <li class="header__selector-item"><a href="/lemoore/skill-building/" class="header__selector-link" data-focus-parent="info-select">Skill Builders</a></li>
            <li class="header__selector-item"><a href="/information-for/alumni.php" class="header__selector-link" data-focus-parent="info-select">Alumni</a></li>
            <li class="header__selector-item"><a href="/district/departments/" class="header__selector-link" data-focus-parent="info-select">Faculty &amp; Staff</a></li>
         </ul>
      </div>
      <div class="header__login"><a href="/portal/" class="header__login-link" data-icon="login">myWestHills</a></div>
      <div class="header__class-search"><a href="/schedule/" class="header__class-search-link" data-icon="book-3"></a></div>
      <div class="header__search"><button xmlns:v-on="http://omniupdate.com/XSL/Variables" type="button" class="header__search-button js-header-search" aria-label="Search Display" data-icon="search-form" v-on:click="searchToggle"></button></div>
      <div class="header__cta"><a href="/lemoore/admissions/" class="header__cta-link">Apply Now</a></div>
   </div>
   <nav xmlns:v-on="http://omniupdate.com/XSL/Variables" class="main-nav js-main-nav" id="main-nav" v-on:focusout="checkFocusMainNav" title="main navigation" aria-label="main navigation">
      <form action="/search.php" class="main-nav__mobile-search"><input name="q" type="search" class="main-nav__mobile-search-input" aria-label="search input" placeholder="Search"><input type="hidden" name="location" value=""><button type="submit" class="main-nav__mobile-search-submit" aria-label="search submit" data-icon="search-header"></button></form><a href="/portal/" class="main-nav__mobile-login" data-icon="login" data-after-icon="arrow">myWestHills</a><a href="/schedule/" class="main-nav__class-search" data-icon="book-3" data-after-icon="arrow">Course Schedule</a><ul class="main-nav__items">
         <li class="main-nav__item"><a href="/lemoore/degrees-and-certificates/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Degrees &amp; Certificates</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Degrees &amp; Certificates" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Degrees &amp; Certificates</button><div class="main-nav__item-dropdown js-dropdown" id="Degrees &amp; Certificates">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Find a Program</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/degrees-and-certificates/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Programs at Lemoore</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/browse-by-interest/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Browse By Interest</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/academics/degrees-and-certificates/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">All Programs</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/lemoore/admissions/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Admissions</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Admissions" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Admissions</button><div class="main-nav__item-dropdown js-dropdown" id="Admissions">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Getting Started</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Future Students</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/returning-students/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Returning Students</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/why-whc.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Why West Hills College</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/counseling/ask-an-advisor.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Ask an Advisor</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Paying for College</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/cost-of-attendance/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Cost of Attendance</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/financial-aid/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Financial Aid</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/grants-and-scholarships.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Grants &amp; Scholarships</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/lemoore/resources/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Resources</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Resources" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Resources</button><div class="main-nav__item-dropdown js-dropdown" id="Resources">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Resources</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Resources at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/student-support/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Support Programs</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/schedule/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Course Schedule</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/catalog/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Catalog</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/academic-calendar.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Calendar</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/documents/final_exam_schedule.pdf" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Finals Schedule</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/oer/index.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Open Education Resources</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/transcripts.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Transcripts</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/faq/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Frequently Asked Questions</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Services</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/student-support/tutoring/index.php" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Academic Center for Excellence</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/counseling/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Counseling &amp; Advising</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/admissions/financial-aid/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Financial Aid</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/helpdesk/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Help Desk</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/library/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Library &amp; Learning Resource Center</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/military-services/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Military Services</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/transfer-center/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Transfer Center</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/career-center/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Workforce Internship Networking Center</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/lemoore/student-life/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Student Life</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Student Life" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Student Life</button><div class="main-nav__item-dropdown js-dropdown" id="Student Life">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Campus Life</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Student Life at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/campus-safety/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Campus Safety (Title IX)</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/clubs-and-organizations/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Clubs &amp; Organizations</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/cafe/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Bus Routes</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">&nbsp;</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/resources/library/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Library</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="https://www.bkstr.com/westhillslemoorestore/home" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Bookstore</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/cafe/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Food on Campus</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/student-life/wellness-center/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Wellness Center</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="/lemoore/about/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">About</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="About" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">About</button><div class="main-nav__item-dropdown js-dropdown" id="About">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Who We Are</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/about/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">About WHC&nbsp;Lemoore</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/about/faculty-and-staff-directory/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Faculty&nbsp;&amp;&nbsp;Staff Directory</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/district/about/jobs-at-whc/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Careers at West Hills</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/map/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Maps &amp; Directions</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/contact-us/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Contact Us</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">What's Happening</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/news-and-events/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">News &amp; Events</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/blog/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Spotlight Blog</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/lemoore/events/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Upcoming events</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="/magazine/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">West Hills Magazine</a></li>
                  </ul>
               </div>
            </div>
         </li>
         <li class="main-nav__item"><a href="http://westhillsgoldeneagles.com/" class="main-nav__item-link" aria-haspopup="true" v-on:focus="topLinkFocus" v-on:click="topLinkClick" data-focus-parent="main-nav">Golden Eagles Athletics</a><button type="button" class="main-nav__item-button js-dropdown-button" aria-controls="Golden Eagles Athletics" data-focus-parent="main-nav" data-icon="accordion" v-on:click="subNavToggle">Golden Eagles Athletics</button><div class="main-nav__item-dropdown js-dropdown" id="Golden Eagles Athletics">
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Men's Sports</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/mbkb/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Basketball</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/msoc/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Soccer</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/wrest/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Wrestling</a></li>
                  </ul>
               </div>
               <div class="main-nav__item-dropdown-column">
                  <div class="main-nav__item-dropdown-column-title">Women's Sports</div>
                  <ul class="main-nav__item-dropdown-column-items">
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/wbkb/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Basketball</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/wsoc/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Soccer</a></li>
                     <li class="main-nav__item-dropdown-column-item"><a href="http://westhillsgoldeneagles.com/sports/wvball/" class="main-nav__item-dropdown-column-link" data-focus-parent="main-nav">Volleyball</a></li>
                  </ul>
               </div>
            </div>
         </li>
      </ul>
   </nav>
</header>