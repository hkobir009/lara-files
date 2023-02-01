@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Categories') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('categories.all') }}">"{{ translate('All Categories') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        @foreach ($categories as $key => $category)

            <div class="mb-3 bg-white shadow-sm rounded">
                <div class="p-3 border-bottom fs-16 fw-600">
                    <a href="{{ route('products.category', $category->slug) }}" class="text-reset fw-800">{{  $category->getTranslation('name') }}</a>
                </div>
                <div class="p-3 p-lg-4">
                    <div class="row">
                      <div class="col-lg-8">
                             <div class="row">
                                @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
                             <div class="col-lg-6 col-6 text-left">
                                <h6 class="mb-3">
                                    <a class="text-reset fw-600 fs-14 hov-text-primary" href="{{ route('products.category', \App\Models\Category::find     ($first_level_id)->slug) }}">
                                        {{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}
                                    </a>
                                </h6>
                                <ul class="mb-3 list-unstyled pl-2">
                                    @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                                    <li class="mb-2">
                                        <a class="text-reset hov-text-primary" href="{{ route('products.category', \App\Models\Category::find($second_level_id)    ->slug) }}" >
                                            {{ \App\Models\Category::find($second_level_id)->getTranslation('name') }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                             @endforeach
                             </div>
                      </div>
                        <div class="col-lg-4 m-auto">
                            <div class="all-catimg text-center">
                                {{-- <img class="img-fluid" src="{{  $category->banner }}" alt=""> --}}
                                <img class="cat-image lazyload mr-2 opacity-60 h-200px w-auto"
                                    src="{{ asset('assets/img/placeholder.jpg') }}"
                                    data-src="{{ uploaded_asset($category->banner) }}"
                                    width="16"
                                    alt="{{ $category->getTranslation('name') }}"
                                    onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
