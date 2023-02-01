<a href="{{ route('wishlists.index') }}"
    class=" d-none d-lg-flex ml-3 position-relative size-45px bg-light align-items-center justify-content-center rounded-10 rounded-circle">
    <i class="lar la-heart la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1 absolute-top-right" style="top: 3px; right: -5px">
        @if (Auth::check())
            <span class="badge badge-inline badge-pill text-dark bg-white shadow-md"
                style="width: 16px; height: 16px; font-size: 10px">
                {{ count(Auth::user()->wishlists) }}
            </span>
        @else
            <span class="badge badge-inline badge-pill text-dark shadow-md "
                style="width: 16px; height: 16px; font-size: 10px">0</span>
        @endif
        {{-- <span class="nav-box-text d-none d-xl-block opacity-80">{{ translate('Wishlist') }}</span> --}}
    </span>
</a>
