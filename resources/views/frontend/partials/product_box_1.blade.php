<div
    class="aiz-card-box border border-light rounded mt-1 mb-2 px-3 pb-3 has-transition bg-white shadow product-carousel">
    @if (discount_in_percentage($product) > 0)
        <span class="badge-custom">{{ translate('OFF') }}
            <span class="box ml-1 mr-0">&nbsp;{{ discount_in_percentage($product) }}%</span>
        </span>
    @endif
    <div class="position-relative overflow-hidden">
        <a href="{{ route('product', $product->slug) }}" class="d-block position-relative pro-img">
            <img class="img-fit lazyload mx-auto h-140px h-md-210px" src="{{ asset('assets/img/placeholder.jpg') }}"
                 data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                 alt="{{ $product->getTranslation('name') }}"
                 onerror="this.onerror=null;this.src='{{ asset('assets/img/placeholder.jpg') }}';">
            <div class="hov-overlay position-absolute top-0 has-transition"></div>
        </a>
        @if ($product->wholesale_product)
            <span class="absolute-bottom-left fs-11 text-white fw-600 px-2 lh-1-8" style="background-color: #455a64">
                {{ translate('Wholesale') }}
            </span>
        @endif
        <div class="absolute-top-right aiz-p-hov-icon hover-heart">
            <a class="fw-600 fs-13 rounded-10 align-items-center bg-primary text-white d-flex justify-content-center"
               href="javascript:void(0)" onclick="addToWishList({{ $product->id }})" data-toggle="tooltip"
               data-title="{{ translate('Add to wishlist') }}" data-placement="left">
                <i class="lar la-heart la-2x"></i>
            </a>
            <!-- <a href="javascript:void(0)" onclick="addToCompare({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to compare') }}" data-placement="left">
                <i class="las la-sync"></i>
            </a>-->
        </div>

    </div>
    <div class="text-center mt-2">
        <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-2 h-35px">
            <a href="{{ route('product', $product->slug) }}"
               class="d-block text-reset">{{ $product->getTranslation('name') }}</a>
        </h3>
        <div class="fs-15 mb-2">
            @if (home_base_price($product) != home_discounted_base_price($product))
                <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
            @endif
            <span class="fw-700 text-primary">{{ home_discounted_base_price($product) }}</span>
        </div>
        @if(config('custom.star_rating_enabled'))
            <div class="rating rating-sm mb-1">
                <i class = 'las la-star active'></i> 
                <b>{{ $product->rating }}</b>
                @if ($product->rating < 1)
                ({{ translate('No Reviews') }})
                @endif
            </div>
        @endif
        <div class="addToCart-main border position-relative rounded-pill mx-auto bg-primary">
            <a class="fw-bold addToCart position-absolute align-items-center justify-content-center"
               href="javascript:void(0)"
               onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip"
               data-title="{{ translate('Add to cart') }}" data-placement="left">
                <i class="las la-shopping-cart la-2x mr-1 text-white"></i> <span
                    class="addToCart-text text-white">{{ translate('Add') }}</span>
            </a>
        </div>
        @if (addon_is_activated('club_point'))
            <div class="rounded px-2 mt-2 bg-soft-primary border-soft-primary border">
                {{ translate('Club Point') }}:
                <span class="fw-700 float-right">{{ $product->earn_point }}</span>
            </div>
        @endif
    </div>
</div>
