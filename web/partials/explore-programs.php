<section class="section__container">
    <div class="section__content-full filter-bar --color-fill">
        <header class="filter-bar__title">
            <h2 class="header3">Explore our programs</h2>
        </header>
        <form action="/s" id="explore-progrms">
        <div class="filter-bar__content">
            <div class="filter-bar__bar">
                <div class="filter-bar__filter">
                    <div class="filter-bar__filter-label">College</div>
                    <div class="filter-bar__filter-select-container">
                        <select name="college-filter" id="college-filter-one" class="filter-bar__filter-select" aria-label="college" onchange="this.form.submit()">
                            <option value="College">College</option>
                            <option value="College2">College 2</option>
                            <option value="College3">College 3</option>
                        </select>
                    </div>
                </div>
                <div class="filter-bar__filter">
                    <div class="filter-bar__filter-label">Area of Interest</div>
                    <div class="filter-bar__filter-select-container">
                        <select name="interest-filter" id="college-filter-two" class="filter-bar__filter-select" aria-label="interest" onchange="this.form.submit()">
                            <option value="interest">Interest</option>
                            <option value="interest2">Interest 2</option>
                            <option value="interest3">Interest 3</option>
                        </select>
                    </div>
                </div>
                <div class="filter-bar__filter">
                    <div class="filter-bar__filter-label">Degree Type</div>
                    <div class="filter-bar__filter-select-container">
                        <select name="degree-level-filter" id="degree-level-filter" class="filter-bar__filter-select" aria-label="degree" onchange="this.form.submit()">
                            <option value="degree">Degree</option>
                            <option value="degree2">Degree 2</option>
                            <option value="degree3">Degree 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="filter-bar__filter-results">
                <span >53 Results</span>
            </div>
        </div>
        <div class="table-listing">
            <div class="interest-builder__list-header">
                <span class="interest-builder__list-heading">Program</span><span class="interest-builder__list-heading">Degrees Available</span><span class="interest-builder__list-heading --sub">53 Results</span>
            </div>
            <ul class="table-listing__list-items">
                <li class="table-listing__list-item">
                    <div class="table-listing__list-item-campus"><div class="table-listing__list-item-campus-circle"><span class="table-listing__list-item-campus-icon">C</span></div></div>
                    <div class="table-listing__list-item-info">
                        <div class="table-listing__list-item-name">Office management &amp; technology</div>
                        <div class="table-listing__list-item-degree"><span class="table-listing__list-item-degree-list">AS-T Degree</span></div>
                    </div>
                    <a href="" class="link__button-table table-listing__list-item-link">More</a>
                </li>
                <li class="table-listing__list-item">
                    <div class="table-listing__list-item-campus"><div class="table-listing__list-item-campus-circle"><span class="table-listing__list-item-campus-icon">C</span></div></div>
                    <div class="table-listing__list-item-info">
                        <div class="table-listing__list-item-name">Office management &amp; technology</div>
                        <div class="table-listing__list-item-degree"><span class="table-listing__list-item-degree-list">AS-T Degree</span></div>
                    </div>
                    <a href="" class="link__button-table table-listing__list-item-link">More</a>
                </li>
                <li class="table-listing__list-item">
                    <div class="table-listing__list-item-campus"><div class="table-listing__list-item-campus-circle"><span class="table-listing__list-item-campus-icon">C</span></div></div>
                    <div class="table-listing__list-item-info">
                        <div class="table-listing__list-item-name">Office management &amp; technology</div>
                        <div class="table-listing__list-item-degree"><span class="table-listing__list-item-degree-list">AS-T Degree</span></div>
                    </div>
                    <a href="" class="link__button-table table-listing__list-item-link">More</a>
                </li>
                <li class="table-listing__list-item">
                    <div class="table-listing__list-item-campus"><div class="table-listing__list-item-campus-circle"><span class="table-listing__list-item-campus-icon">C</span></div></div>
                    <div class="table-listing__list-item-info">
                        <div class="table-listing__list-item-name">Office management &amp; technology</div>
                        <div class="table-listing__list-item-degree"><span class="table-listing__list-item-degree-list">AS-T Degree</span></div>
                    </div>
                    <a href="" class="link__button-table table-listing__list-item-link">More</a>
                </li>
            </ul>
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
            <div class="table-listing__footer-keys">
                <div class="table-listing__footer-keys-item">AS-T Degree (2 years)</div>
                <div class="table-listing__footer-keys-item">AS Degree (2 years)</div>
                <div class="table-listing__footer-keys-item">AA Degree (1 year)</div>
                <div class="table-listing__footer-keys-item">Certificate (6 months)</div>
                <a href="#" class="table-listing__footer-keys-link">Program Disclosures</a>
            </div>
        </div>
        </form>
    </div>
</section>