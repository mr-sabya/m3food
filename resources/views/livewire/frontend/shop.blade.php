<div class="my-5">
    <section id="search-input">
        <div class="container">
            <div class="input-group">
                <span class="input-group-text">
                    <span class="material-icons-outlined">
                        search
                    </span>
                </span>
                <input type="text" wire:model.live='search' placeholder="Search ....." class="form-control search">
            </div>
        </div>
    </section>
    <section id="filter-title">
        <div class="container">
            <div class="row gy-2 gx-4">
                <div class="col-md-4">
                    <div class="filter-heading d-flex justify-content-between align-items-center">
                        <div class="title cursor-pointer">
                            <span class="material-icons-outlined">
                                filter_list
                            </span>
                            Filter
                        </div>

                        <span wire:click='formReset' class="material-icons-outlined cursor-pointer">
                            settings_backup_restore
                        </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right d-flex flex-wrap justify-content-between align-items-center">
                        <span class="course-count">
                            Product Found <span class="digit">41</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product-filter">
        <div class="container">
            <div class="row gy-2 gx-4">
                <div class="col-xl-4">
                    <div id="filter-panel" class="showhide">
                        <div class="accordion">
                            <div class="filter-heading filter-heading-top d-flex justify-content-between align-items-center accordion-button" data-bs-toggle="collapse" data-bs-target="#caterories-accordion" type="button">
                                <div class="title cursor-pointer">
                                    <span class="material-icons-outlined">
                                        filter_list
                                    </span>
                                    Categories
                                </div>
                            </div>
                            <ul class="filter-items accordion-collapse collapse show" id="caterories-accordion">
                                <li class="item">
                                    <input id="c" type="checkbox" wire:model.live='all_category' value="all" class="form-check-input">
                                    <label for="c">All Categories</label>
                                </li>
                                <!--[if BLOCK]><![endif]-->
                                <li class="item">
                                    <input wire:model.live='categories' id="c1" type="checkbox" class="form-check-input" value="6">
                                    <label for="c1">Trending</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c2" type="checkbox" class="form-check-input" value="16">
                                    <label for="c2">Shorbot</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c3" type="checkbox" class="form-check-input" value="7">
                                    <label for="c3">Honey</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c4" type="checkbox" class="form-check-input" value="8">
                                    <label for="c4">Herbs</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c5" type="checkbox" class="form-check-input" value="17">
                                    <label for="c5">Ghee &amp; Oil</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c6" type="checkbox" class="form-check-input" value="9">
                                    <label for="c6">Combo</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c7" type="checkbox" class="form-check-input" value="14">
                                    <label for="c7">Baby Food</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c8" type="checkbox" class="form-check-input" value="13">
                                    <label for="c8">Dry Fruits</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c9" type="checkbox" class="form-check-input" value="11">
                                    <label for="c9">Nuts</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c10" type="checkbox" class="form-check-input" value="10">
                                    <label for="c10">Seeds</label>
                                </li>
                                <li class="item">
                                    <input wire:model.live='categories' id="c11" type="checkbox" class="form-check-input" value="12">
                                    <label for="c11">Dates</label>
                                </li>
                                <!--[if ENDBLOCK]><![endif]-->
                            </ul>
                        </div>

                        <div class="accordion pricing">
                            <div class="filter-heading filter-heading-top d-flex justify-content-between align-items-center accordion-button" data-bs-toggle="collapse" data-bs-target="#pricing-accordion" type="button">
                                <div class="title cursor-pointer">
                                    <span class="material-icons-outlined">
                                        filter_list
                                    </span>
                                    Pricing
                                </div>
                            </div>

                            <ul class="filter-items accordion-collapse collapse show" id="pricing-accordion">
                                <li class="item py-0">
                                    <div class="price-slider">
                                        <div class="input-panel">
                                            <div>
                                                <label for="">Min Price</label>
                                                <input wire:model.live='min_price' type="number" class="form-control from-control-sm" name="min_price" id="minPrice">
                                            </div>
                                            <div>
                                                <label for="">Max Price</label>
                                                <input wire:model.live='max_price' type="number" class="form-control from-control-sm" name="max_price" id="maxPrice">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <input id="p1" wire:model.live='is_discount' value="0" type="radio" class="form-check-input">
                                    <label for="p1">All</label>
                                </li>
                                <li class="item">
                                    <input id="p2" wire:model.live='is_discount' value="1" type="radio" class="form-check-input">
                                    <label for="p2">Discount Offer</label>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-xl-8">
                    <div class="right">
                        <section id="products">
                            <div class="container-fluid">

                                <livewire:frontend.home.product-grid class_name="filter" />

                            </div>
                        </section>
                        <div>
                            <!--[if BLOCK]><![endif]-->
                            <nav class="d-flex justify-items-center justify-content-between">
                                <div class="d-flex justify-content-between flex-fill d-sm-none">
                                    <ul class="pagination">

                                        <!--[if BLOCK]><![endif]-->
                                        <li class="page-item disabled" aria-disabled="true">
                                            <span class="page-link">&laquo; Previous</span>
                                        </li>
                                        <!--[if ENDBLOCK]><![endif]-->


                                        <!--[if BLOCK]><![endif]-->
                                        <li class="page-item">
                                            <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage('page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()" wire:loading.attr="disabled">Next &raquo;</button>
                                        </li>
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </ul>
                                </div>

                                <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                                    <div>
                                        <p class="small text-muted">
                                            Showing
                                            <span class="fw-semibold">1</span>
                                            to
                                            <span class="fw-semibold">9</span>
                                            of
                                            <span class="fw-semibold">41</span>
                                            results
                                        </p>
                                    </div>

                                    <div>
                                        <ul class="pagination">

                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->


                                            <!--[if BLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->


                                            <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item active" wire:key="paginator-page-page-1" aria-current="page"><span class="page-link">1</span></li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item" wire:key="paginator-page-page-2"><button type="button" class="page-link" wire:click="gotoPage(2, 'page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()">2</button>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item" wire:key="paginator-page-page-3"><button type="button" class="page-link" wire:click="gotoPage(3, 'page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()">3</button>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item" wire:key="paginator-page-page-4"><button type="button" class="page-link" wire:click="gotoPage(4, 'page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()">4</button>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item" wire:key="paginator-page-page-5"><button type="button" class="page-link" wire:click="gotoPage(5, 'page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()">5</button>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if ENDBLOCK]><![endif]-->
                                            <!--[if ENDBLOCK]><![endif]-->


                                            <!--[if BLOCK]><![endif]-->
                                            <li class="page-item">
                                                <button type="button" dusk="nextPage" class="page-link" wire:click="nextPage('page')" x-on:click="   ($el.closest(&#039;body&#039;) || document.querySelector(&#039;body&#039;)).scrollIntoView()" wire:loading.attr="disabled" aria-label="Next &raquo;">&rsaquo;</button>
                                            </li>
                                            <!--[if ENDBLOCK]><![endif]-->
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--[if ENDBLOCK]><![endif]-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>