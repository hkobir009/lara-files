{{-- <section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('terms') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Terms & conditions') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Return Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Support Policy') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section> --}}
{{-- custom bottom bar --}}
<section class="custom-f-topbar bg-light py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="text-md-right">
                    <ul class="text-center list-inline mb-0">
                    <li class="list-inline-item" style="font-size:18px">Pay With : </li>
                        @if (get_setting('payment_method_images') != null)
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <img src="{{ uploaded_asset($value) }}" height="30" class="mw-100 h-auto"
                                        style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 text-light footer-widget" style="background-color: #0D0D0D">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-md-left">
                <div class="mb-4">
                    <a href="{{ route('home') }}" class="d-block">
                        @if (get_setting('footer_logo') != null)
                            <img class="lazyload" src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                data-src="{{ uploaded_asset(get_setting('footer_logo')) }}"
                                alt="{{ env('APP_NAME') }}" height="44">
                        @else
                            <img class="lazyload" src="{{ asset('assets/img/placeholder-rect.jpg') }}"
                                data-src="{{ asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}"
                                height="44">
                        @endif
                    </a>
                    <div class="my-3">
                        {!! get_setting('about_us_description', null, App::getLocale()) !!}
                    </div>
                    <div class="d-inline-block d-md-block mb-4 follow-us">
                        <h4 class="fs-16 fw-500 mb-3">
                            <span class="pb-2 d-inline-block">Follow Us</span>
                        </h4>
                        @if (get_setting('show_social_links'))
                            <ul class="list-inline my-3 my-md-0 social colored sm">
                                @if (get_setting('facebook_link') != null)
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('facebook_link') }}" target="_blank"
                                            class="facebook d-flex align-items-center justify-content-center"><i class="lab la-facebook-f"></i></a>
                                    </li>
                                @endif
                                @if (get_setting('twitter_link') != null)
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('twitter_link') }}" target="_blank"
                                            class="twitter d-flex align-items-center justify-content-center"><i class="lab la-twitter"></i></a>
                                    </li>
                                @endif
                                @if (get_setting('instagram_link') != null)
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('instagram_link') }}" target="_blank"
                                            class="instagram d-flex align-items-center justify-content-center"><i class="lab la-instagram"></i></a>
                                    </li>
                                @endif
                                @if (get_setting('youtube_link') != null)
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('youtube_link') }}" target="_blank"
                                            class="youtube d-flex align-items-center justify-content-center"><i class="lab la-youtube"></i></a>
                                    </li>
                                @endif
                                @if (get_setting('linkedin_link') != null)
                                    <li class="list-inline-item">
                                        <a href="{{ get_setting('linkedin_link') }}" target="_blank"
                                            class="linkedin d-flex align-items-center justify-content-center"><i class="lab la-linkedin-in"></i></a>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="payment-img">
                    <h4 class="fs-16 fw-500 mb-3">
                        <span class="pb-2 d-inline-block text-uppercase">our payment methods</span>
                    </h4>
                    <img class="img-fluid" src="{{ asset('assets/img/sslcommerce.png') }}" alt="payment methods">
                </div>
            </div>
            {{-- custom monarkmart footer col-2 here --}}
            <div class="col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-16 fw-500 mb-3">
                        <span class="pb-2 d-inline-block">Company</span>
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ url('/about-us') }}">
                                {{ translate('About Us') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('shops.create') }}">
                                {{ translate('Seller Registration') }}
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- @if (get_setting('vendor_system_activation') == 1)
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('Be a Seller') }}
                        </h4>
                        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Apply Now') }}
                        </a>
                    </div>
                @endif --}}
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-16 fw-500 mb-3">
                        <span class="pb-2 d-inline-block">Legal</span>
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('terms') }}">
                                {{ translate('Terms & conditions') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('returnpolicy') }}">
                                {{ translate('Return & Refunds') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('privacypolicy') }}">
                                {{ translate('Privacy Policy') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                {{-- <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ get_setting('widget_one', null, App::getLocale()) }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (get_setting('widget_one_labels', null, App::getLocale()) != null)
                            @foreach (json_decode(get_setting('widget_one_labels', null, App::getLocale()), true) as $key => $value)
                                <li class="mb-2">
                                    <a href="{{ json_decode(get_setting('widget_one_links'), true)[$key] }}"
                                        class="opacity-50 hov-opacity-100 text-reset">
                                        {{ $value }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div> --}}
                <div class="text-center text-md-left mt-4 __web-inspector-hide-shortcut__">
                    <h4 class="fs-16 fw-500 mb-3">
                        <span class="pb-2 d-inline-block">Customer Support</span>
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('faq') }}" class="opacity-70 hov-opacity-100 text-reset fw-300">FAQ</a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('terms') }}">
                                {{ translate('Terms & condition') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('returnpolicy') }}">
                                {{ translate('Return and Refunds') }}
                            </a>
                        </li>
                        {{-- <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('supportpolicy') }}">
                                {{ translate('Support Policy') }}
                            </a>
                        </li> --}}
                        <li class="mb-2">
                            {{-- <span class="d-block opacity-30">{{ translate('Phone') }}:</span> --}}
                            <span class="d-block opacity-70"> Hotline : +88 {{ get_setting('contact_phone') }}</span>
                        </li>
                        <li class="mb-2">
                            {{-- <span class="d-block opacity-30">{{ translate('Email') }}:</span> --}}
                            <span class="d-block opacity-70">
                                <a href="mailto:{{ get_setting('contact_email') }}"
                                class="text-reset"> Mail : {{ get_setting('contact_email') }}</a>
                            </span>
                        </li>
                        <li class="mb-2">
                            <span class="d-block opacity-70"><strong>{{ translate('Address') }}:</strong></span>
                            <span
                                class="d-block opacity-70">{{ get_setting('contact_address', null, App::getLocale()) }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                {{-- <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('My Account') }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (Auth::check())
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('logout') }}">
                                    {{ translate('Logout') }}
                                </a>
                            </li>
                        @else
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                    {{ translate('Login') }}
                                </a>
                            </li>
                        @endif
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset"
                                href="{{ route('purchase_history.index') }}">
                                {{ translate('Order History') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('wishlists.index') }}">
                                {{ translate('My Wishlist') }}
                            </a>
                        </li>
                        @if (addon_is_activated('affiliate_system'))
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-light"
                                    href="{{ route('affiliate.apply') }}">{{ translate('Be an affiliate partner') }}</a>
                            </li>
                        @endif
                    </ul>
                </div> --}}
                <div class="text-center text-md-left mt-4 position-relative rounded-10 p-4 overflow-hidden ">
                    <div class="bg-white opacity-20 absolute-full"></div>
                    <div class=" position-relative z-1" style="background-color: #000000">
                        <div>
                            <img class="img-fluid" src="{{asset('assets/img/barcode.png')}}">
                        </div>
                        <div class="w-300px mw-100 mx-auto mx-md-0 p-1" >
                            @if (get_setting('play_store_link') != null)
                                <a href="{{ get_setting('play_store_link') }}" target="_blank"
                                    class="d-inline-block mr-3 ml-0">
                                    <img src="{{ asset('assets/img/play.png') }}" class="mx-100 h-40px">
                                </a>
                            @endif
                            @if (get_setting('app_store_link') != null)
                                <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
                                    <img src="{{ asset('assets/img/app.png') }}" class="mx-100 h-40px">
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--col-md-4 col-lg-2-->
        </div>
    </div>
    {{-- messanger chat icon --}}
    <div class="position-fixed messenger-icon">
        <div class="border border-dark"
            style="width: 60px; height: 60px; background-color: #e62e04; display: flex; justify-content: center; align-items: center; border-radius:60px">
            <svg width="36" height="36" viewBox="0 0 36 36">
                <path fill="white"
                    d="M1 17.99C1 8.51488 8.42339 1.5 18 1.5C27.5766 1.5 35 8.51488 35 17.99C35 27.4651 27.5766 34.48 18 34.48C16.2799 34.48 14.6296 34.2528 13.079 33.8264C12.7776 33.7435 12.4571 33.767 12.171 33.8933L8.79679 35.3828C7.91415 35.7724 6.91779 35.1446 6.88821 34.1803L6.79564 31.156C6.78425 30.7836 6.61663 30.4352 6.33893 30.1868C3.03116 27.2287 1 22.9461 1 17.99ZM12.7854 14.8897L7.79161 22.8124C7.31238 23.5727 8.24695 24.4295 8.96291 23.8862L14.327 19.8152C14.6899 19.5398 15.1913 19.5384 15.5557 19.8116L19.5276 22.7905C20.7193 23.6845 22.4204 23.3706 23.2148 22.1103L28.2085 14.1875C28.6877 13.4272 27.7531 12.5704 27.0371 13.1137L21.673 17.1847C21.3102 17.4601 20.8088 17.4616 20.4444 17.1882L16.4726 14.2094C15.2807 13.3155 13.5797 13.6293 12.7854 14.8897Z">
                </path>
            </svg>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-4 pb-7 pb-xl-4 text-white" style="background-color: #000">
    <div class="container">
        <div class="row align-items-center">
             <div class="col">
                <div class="text-center d-block fw-300" current-verison="{{ get_setting('current_version') }}">
                    &copy; {{date("Y")}} {!! get_setting('frontend_copyright_text', null, App::getLocale()) !!}
                </div>
            </div>
        </div>
        <!--row-->
    </div>
    <!--conatiner-->
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom border-top rounded-top shadow-none c-mobile-bottom-nav">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 mt-1{{ areActiveRoutes(['home'], 'opacity-100 fw-600') }}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 mt-1{{ areActiveRoutes(['categories.all'], 'opacity-100 fw-600') }}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if (auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if ($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset text-center position-relative footer-mddle-cart">
                <i
                    class="las la-shopping-bag la-2x text-white rounded-circle p-2 bg-primary border border-white"></i>
            </a>
            <span
                class="d-block fs-10 fw-600 opacity-60 text-center f-mobile-cart {{ areActiveRoutes(['cart'], 'opacity-100 fw-600') }}">
                {{ translate('Cart') }}
                @php
                    $count = isset($cart) && count($cart) ? count($cart) : 0;
                @endphp
                (<span class="cart-count">{{ $count }}</span>)
            </span>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i
                        class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 text-primary') }}"></i>
                    @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span
                            class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"
                            style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span
                    class="d-block fs-10 fw-600 opacity-60 mt-1 {{ areActiveRoutes(['all-notifications'], 'opacity-100 fw-600') }}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
                @if (isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60 mt-1">{{ translate('Account') }}</span>
                    </a>
                @else
                    <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
            @else
                <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        <img src="{{ asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
