 <section class="section__container">
    <div class="section__content-full title-bar --color-fill --no-bottom-padding">
        <header class="title-bar__title">
            <h1 class="header1">Search Results</h1>
        </header>
    </div>
    <form action="/s" id="search">
    <div class="section__content-full filter-bar --color-fill">
        <div class="filter-bar__content">
            <div class="filter-bar__bar">
                <div class="filter-bar__filter --two-thirds">
                    <div class="filter-bar__filter-label">
                        67 Results
                    </div>
                    <div class="filter-bar__filter-search-container" data-icon="search-form">
                        <input type="search" placeholder="Type your questions and press enter" aria-label="Search" class="filter-bar__filter-search" id="search-input">
                        <button type="submit" aria-label="search submit" class="filter-bar__filter-search-submit"></button>
                    </div>
                </div>
                <div class="filter-bar__filter">
                    <div class="filter-bar__filter-label">
                        View
                    </div>
                    <div class="filter-bar__filter-select-container">
                        <select name="view filter" id="view-filter" class="filter-bar__filter-select" onchange="this.form.submit()">
                            <option value="">All Results</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-results__filter-order">
            <label class="search-results__filter-order-label" for="search-order">Sort by</label>
            <select name="search-order" id="search-order" class="search-results__filter-order-select --plain" onchange="this.form.submit()">
                <option value="relevance">relevance</option>
            </select>
        </div>
    </div>

    <div class="section__content-full --color-fill">
        <div class="search-results">
            <div class="search-results__column">
                <div class="search-results__item">
                    <a href="" class="search-results__item-link">
                        <div class="header6">Paramedic Health Care Program at West Hills College Lemoore</div>
                        <p class="search-results__item-description">Academic Center for Excellence Final Exam Schedule Health Careers Library &amp; Learning... providing the highest quality pre-hospital emergency medical care. Course Format The WHCL Paramedic...</p>
                    </a>
                </div>
                <div class="search-results__item">
                    <a href="" class="search-results__item-link">
                        <div class="header6">Paramedic Health Care Program at West Hills College Lemoore</div>
                        <p class="search-results__item-description">Academic Center for Excellence Final Exam Schedule Health Careers Library &amp; Learning... providing the highest quality pre-hospital emergency medical care. Course Format The WHCL Paramedic...</p>
                    </a>
                </div>
                <div class="search-results__item">
                    <a href="" class="search-results__item-link">
                        <div class="header6">Paramedic Health Care Program at West Hills College Lemoore</div>
                        <p class="search-results__item-description">Academic Center for Excellence Final Exam Schedule Health Careers Library &amp; Learning... providing the highest quality pre-hospital emergency medical care. Course Format The WHCL Paramedic...</p>
                    </a>
                </div>
            </div>

            <div class="table-listing__footer">
                <div class="table-listing__footer-pagination">
                    <div class="table-listing__footer-pagination-options">
                        <div class="table-listing__footer-pagination-options-label">
                            <div class="table-listing__footer-pagination-options-label-text">View</div>
                            <div class="table-listing__footer-pagination-options-select-container">
                                <select name="page-count" id="page-count" class="table-listing__footer-pagination-options-select" aria-label="page display count" >
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-listing__footer-pagination-interface">
                        <div class="table-listing__footer-pagination-interface-display">
                            <span class="table-listing__footer-pagination-interface-current">1</span> of<span class="table-listing__footer-pagination-interface-max">10</span>
                        </div>
                        <div class="table-listing__footer-pagination-button-container">
                            <button type="submit" aria-label="previous page" class="table-listing__footer-pagination-button --prev" data-icon="accordion"></button>
                            <button type="submit" aria-label="next page" class="table-listing__footer-pagination-button --next" data-icon="accordion"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>