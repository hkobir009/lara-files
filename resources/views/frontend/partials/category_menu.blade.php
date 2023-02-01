<div class="position-relative z-1 shadow-sm">
    <div class="z-1 p-3 border-bottom">
        <a class="d-block mr-3 ml-0"
           href="{{route('home')}}">
            <img src="{{asset("assets/img/logo.png")}}"
                 alt="Yippeekart"
                 class="mw-100 h-30px"
                 height="30">
        </a>
        <div class="absolute-top-right mt-2">
            <button class="btn btn-sm p-2 bs-canvas-close"
                    data-toggle="class-toggle"
                    data-target=".mobile-category-sidebar"
                    data-same=".mobile-category-trigger">
                <i class="las la-times la-2x"></i>
            </button>
        </div>
    </div>

    <div class="aiz-category-menu bg-white rounded
        @if (Route::currentRouteName() == 'home')
            shadow-sm
            @else shadow-lg
        @endif"
         id="category-sidebar">
        <div class="
        p-3 d-none d-lg-block rounded-top all-category position-relative text-left border-top border-bottom text-dark
        fw-bold">
            <span class="fw-600 fs-16 mr-3">{{ translate('Categories') }}</span>
            <a href="{{ route('categories.all') }}"
               class="text-reset">
                <span class="d-none d-lg-inline-block position-absolute sidebar-see-all mr-3">{{ translate('See All') }}></span>
            </a>
        </div>
        <ul id="accordion"
            class="list-unstyled categories py-2 mb-0 text-left h-100 overflow-auto menu-accordian">
            @foreach ($globalCategories as $category)
                <li class="category-nav-element my-2 d-flex justify-content-between align-items-center flex-column"
                    data-id="{{ $category->id }}">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <a href="{{ route('products.category', $category->slug) }}"
                           class="text-truncate text-reset py-2 px-3">
                            <img class="cat-image lazyload mr-2 opacity-60"
                                 src="{{ asset('assets/img/placeholder.jpg') }}"
                                 data-src="{{ uploaded_asset($category->icon) }}"
                                 width="16"
                                 alt="{{ $category->getTranslation('name') }}"
                                 onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                            <span class="cat-name">{{ $category->getTranslation('name') }}</span>
                        </a>

                        @if($category->children_categories_count > 0)
                            <i class="las la-angle-down mr-3 c-pointer text-reset"
                               data-toggle="collapse"
                               data-target="#category-item-{{ $category->id }}"
                               aria-expanded="true"
                               aria-controls="category-item"></i>
                        @endif
                    </div>

                    {{-- level one category --}}
                    @foreach($category->childrenCategories as $levelOneCategory)
                        <div id="category-item-{{ $levelOneCategory->parent_id }}"
                             class="collapse text-left w-100"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div id="sub-acordion"
                                 class="my-2 d-flex align-items-center justify-content-between">
                                <a href="{{ route('products.category', $levelOneCategory->slug) }}"
                                   class="ml-5 mb-0 c-pointer text-dark">
                                    {{ $levelOneCategory->getTranslation('name') }}
                                </a>
                                @if($levelOneCategory->children_categories_count > 0)
                                <i class="las la-plus mr-3 c-pointer text-reset subCatSelector"
                                   data-toggle="collapse"
                                   data-target="#sub-accor-item-{{ $levelOneCategory->id }}"
                                   aria-expanded="true"
                                   aria-controls="sub-accor-item-{{ $levelOneCategory->id }}"></i>
                                @endif
                            </div>

                            {{-- level two category --}}
                            @foreach($levelOneCategory->childrenCategories as $levelTwoCategory)
                                <div id="sub-accor-item-{{ $levelTwoCategory->parent_id }}"
                                     class="collapse my-2">
                                    <a href="{{ route('products.category', $levelTwoCategory->slug) }}"
                                       class="ml-5 pl-3 text-dark">
                                        {{ $levelTwoCategory->getTranslation('name') }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
</div>
