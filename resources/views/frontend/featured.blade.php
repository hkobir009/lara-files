@if (count($featured_categories) > 0)
    <div class="row position-relative">
        <div class="accordion w-100" id="categoryaccordion">
            <div class="gutters-15 mx-auto tab-category border-0 w-100" role="presentation"
            data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true'>
            @foreach ($featured_categories as $category)
                    <a href="#categoryTabSection" class="col list-unstyled">
                        <div id="category-tab" data-toggle="collapse" data-target="#featuredCategory{{ $category->id }}" role="tab"
                            aria-controls="home" aria-selected="true"
                            class="d-block catego-animation has-transition text-reset p-4 bg-white rounded-10 text-center mb-4 c-pointer w-100">
                            <div class="d-flex align-items-center justify-content-center h-60px mb-4">
                                <img src="{{ uploaded_asset($category->banner) }}"
                                    data-src="{{ uploaded_asset($category->banner) }}"
                                    alt="{{ $category->getTranslation('name') }}" class="mw-100 mx-auto lazyloaded"
                                    style="max-height: 60px;"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                            </div>
                            <span class="fs-15">{{ Str::limit($category->getTranslation('name'), 25) }}</span>
                        </div>
                    </a>
                @break($loop->iteration == 6)
            @endforeach
            </div>
            <div id="categoryTabSection">
                @foreach ($featured_categories as $featured_category_item)
                    <div class="collapse" role="tabpanel" data-parent="#categoryaccordion" id="featuredCategory{{ $featured_category_item->id }}">
                        <h6 class="text-primary">{{$featured_category_item->name . ' Sub Category'}}</h6>
                        <div class="sub-category-main">
                            @foreach ($featured_category_item->childrenCategories as $featured_categories_subcategory)

                                <a href="{{ route('products.category', $featured_categories_subcategory->slug) }}"
                                   class="bg-white rounded-10 m-2 p-2 d-flex text-dark align-items-center justify-content-left">
                                    <img width="80" height="60"
                                         src="{{ uploaded_asset($featured_categories_subcategory->banner) }}"
                                         data-src="{{ uploaded_asset($featured_categories_subcategory->banner) }}"
                                         class="mw-100 lazyloaded"
                                         alt="{{ $featured_categories_subcategory->getTranslation('name') }}"
                                         onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                                    <span class="text-truncate fs-15 d-block m-auto">{{ $featured_categories_subcategory->getTranslation('name') }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('categories.all') }}" class="btn btn-primary rounded-10 px-5 d-inline-block mt-4">All Categories</a>
        </div>
    </div>
@endif
