@if (get_setting('topbar_banner') != null)
    <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner"
         data-value="removed">
        <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
            <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}"
                 class="w-100 mw-100 h-50px h-lg-auto img-fit">
        </a>
        <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed"
                data-toggle="remove-parent" data-parent=".top-banner">
            <i class="la la-close la-2x"></i>
        </button>
    </div>
@endif
<!-- Top Bar -->
<div class="top-navbar bg-light border-bottom border-soft-secondary z-1035 py-0">
    <!--custom-topbar- end-->
    <div class="container">
        <div class="row">
            <div class="col text-right d-none d-lg-block">
                <div class="d-flex justify-content-between align-items-center custom-topbar">
                    <div class="d-flex">
                        @if (get_setting('helpline_number'))
                            <div class="mx-2 d-flex align-items-center top-icon">
                                <i class="las la-phone la-1dot5"></i>
                                <a href="tel:{{ get_setting('helpline_number') }}" class="fs-14 ml-1">
                                    <span>{{ get_setting('helpline_number') }}</span>
                                </a>
                            </div>
                            <div class="mx-2 d-flex align-items-center top-icon">
                                <i class="las la-envelope la-1dot5"></i>
                                <a href="mailto: {{ get_setting('contact_email') }}" class="fs-14 ml-1">
                                    {{ get_setting('contact_email') }}</a>
                            </div>
                        @endif
                    </div>
                    <div class="d-flex top-rightBtn">
                        <div class="mx-2 d-flex align-items-center">
                            <a class="py-1 px-2" href="{{ route('returnpolicy') }}">
                                {{ translate('Return & Refunds Policy') }}</a>
                        </div>
                        <div class="mx-2 d-flex align-items-center">
                            <a class="py-1 px-2" href="{{ route('terms') }}">
                                {{ translate('Terms & conditions') }}</a>
                        </div>
                        <div class="mx-2 d-flex align-items-center">
                            <a class="py-1 px-2" href="{{ route('faq') }}">FAQ</a>
                        </div>
                        <div class="mx-2 d-flex align-items-center">
                            <a class="py-1 px-2" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Top Bar -->
    <header
        class="@if (get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
        <div class="position-relative logo-bar-area z-1">
            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                        <a class="d-block py-20px mx-3 ml-0" href="{{ route('home') }}">
                            @php
                                $header_logo = get_setting('header_logo');
                            @endphp
                            @if ($header_logo != null)
                                <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}"
                                     class="mw-100 h-30px h-md-50px" height="50">
                            @else
                                <img src="{{ asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}"
                                     class="mw-100 h-30px h-md-40px" height="40">
                            @endif
                        </a>

                        @if (Route::currentRouteName() != 'home')
                            {{-- <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">
                                <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                    <div
                                        class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">
                                        <span class="navbar-toggler-icon"></span>
                                    </div>
                                </div>
                            </div> --}}
                        @endif
                    </div>
                    <div class="d-lg-none ml-auto mr-0">
                        <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                           data-target=".front-header-search">
                            <i class="las la-search la-flip-horizontal la-2x"></i>
                        </a>
                    </div>

                    <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white">
                        <div class="position-relative flex-grow-1">
                            <form action="{{ route('search') }}" method="GET" class="stop-propagation">
                                <div class="d-flex position-relative align-items-center rounded-pill p-1 border">
                                    <div class="d-lg-none" data-toggle="class-toggle"
                                         data-target=".front-header-search">
                                        <button class="btn px-2" type="button"><i
                                                class="la la-2x la-long-arrow-left"></i></button>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="border-0 form-control bg-transparent" id="search"
                                               name="keyword"
                                               @isset($query) value="{{ $query }}" @endisset
                                               placeholder="{{ translate('I am shopping for...') }}" autocomplete="off">
                                        <div class="input-group-append d-none d-lg-block">
                                            <button class="btn btn-primary h-100 rounded-pill px-5" type="submit">
                                                {{-- <i class="la la-search la-flip-horizontal fs-18"></i> --}}
                                                search
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div
                                class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                style="min-height: 200px">
                                <div class="search-preloader absolute-top-center">
                                    <div class="dot-loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="search-nothing d-none p-3 text-center fs-16">

                                </div>
                                <div id="search-content" class="text-left">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-lg-none ml-3 mr-0">
                        <div class="nav-search-box">
                            <a href="#" class="nav-box-link">
                                <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="d-none d-lg-block ml-3 mr-0">
                        <div class="" id="compare">
                            @include('frontend.partials.compare')
                        </div>
                    </div>

                    <div class="d-none d-lg-block mr-0">
                        <div class="" id="wishlist">
                            @include('frontend.partials.wishlist')
                        </div>
                    </div>

                    <div class="d-none d-lg-block mr-0" data-hover="dropdown">
                        <div class="nav-cart-box dropdown h-100" id="cart_items">
                            @include('frontend.partials.cart')
                        </div>
                    </div>

                    @auth
                        @if (!isAdmin())
                            <div class="d-none d-lg-block mr-0" data-hover="dropdown">
                                <div class="nav-cart-box dropdown h-100">
                                    <div class="list-inline-item border-left-0 pl-0 dropdown">
                                        <a class="ml-3 position-relative size-45px bg-light d-flex align-items-center justify-content-center rounded-10 cart-toggler cart-trigger rounded-circle"
                                           data-toggle="dropdown"
                                           href="javascript:void(0);" role="button" aria-haspopup="false"
                                           aria-expanded="false">
                                            <i class="las la-bell la-2x opacity-80"></i>
                                            <span class="absolute-top-right" style="top: 3px; right: -5px">
                                    @if (Auth::user()->unreadNotifications()->count() > 0)
                                                    <span
                                                        class="badge badge-inline badge-pill text-dark bg-white shadow-md"
                                                        style="width: 16px; height: 16px; font-size: 10px">
                                        {{ Auth::user()->unreadNotifications()->count() }}
                                    </span>
                                                @endif
                                </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                            <div class="p-3 bg-light border-bottom">
                                                <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                            </div>
                                            <div class="px-3 c-scrollbar-light overflow-auto "
                                                 style="max-height:300px;">
                                                <ul class="list-group list-group-flush">
                                                    @forelse(Auth::user()->unreadNotifications as $notification)
                                                        <li class="list-group-item">
                                                            @if ($notification->type == 'App\Notifications\OrderNotification')
                                                                @if (Auth::user()->user_type == 'customer')
                                                                    <a href="javascript:void(0)"
                                                                       onclick="show_purchase_history_details('{{ encrypt($notification->data['order_id']) }}')"
                                                                       class="text-reset">
                                                            <span class="ml-2">
                                                                {{ translate('Order code: ') }}
                                                                <span
                                                                    class="text-danger">{{ $notification->data['order_code'] }}</span>
                                                                {{ translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status']))) }}
                                                            </span>
                                                                    </a>
                                                                @elseif (Auth::user()->user_type == 'seller')
                                                                    @if (Auth::user()->id == $notification->data['user_id'])
                                                                        <a href="javascript:void(0)"
                                                                           onclick="show_purchase_history_details('{{ encrypt($notification->data['order_id']) }}')"
                                                                           class="text-reset">
                                                                <span class="ml-2">
                                                                    {{ translate('Order code: ') }}
                                                                    <span
                                                                        class="text-danger">{{ $notification->data['order_code'] }}</span>
                                                                    {{ translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status']))) }}
                                                                </span>
                                                                        </a>
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </li>
                                                    @empty
                                                        <li class="list-group-item">
                                                            <div class="py-4 text-center fs-16">
                                                                {{ translate('No notification found') }}
                                                            </div>
                                                        </li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                            <div class="text-center border-top">
                                                <a href="{{ route('all-notifications') }}"
                                                   class="text-reset d-block py-2">
                                                    {{ translate('View All Notifications') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth

                    <div class="d-none d-lg-block mr-0 position-relative">
                        {{-- <div class="" id="my-account">
                            @include('frontend.partials.cart')
                        </div> --}}
                        {{-- <div class="nav-cart-box dropdown border ml-3 rounded-circle p-2 bg-light c-pointer"
                            id="cart_items">

                        </div>
                        <div class="position-absolute">
                            <div class="dropdown-menu dropdown-menu-right stop-propagation p-2 show">
                                <a href="#" class="text-reset px-4 py-2 d-block">Login</a>
                                <a href="#" class="text-reset px-4 py-2 d-block">Registration</a>
                            </div>
                        </div> --}}
                        <div class="dropdown d-none d-lg-block show custom-u-drop">
                            <a href="#"
                               class="ml-3 px-3 position-relative text-primary h-45px w-45px bg-light hov-bg-danger d-flex align-items-center justify-content-center rounded-circle"
                               data-toggle="dropdown" data-display="static" aria-expanded="true">
                                <i class="las la-user la-2x"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right stop-propagation p-2 text-center user-dropdown position-absolute">
                                <div class="mypanel-logout d-flex flex-column align-items-center">
                                    @auth
                                        @if (isAdmin())
                                            <a href="{{ route('admin.dashboard') }}"
                                               class="text-reset px-4 py-2 d-block">{{ translate('My Panel') }}</a>

                                            {{-- <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                                <a href="{{ route('admin.dashboard') }}"
                                                    class="text-reset d-inline-block opacity-60 py-2">{{ translate('My Panel') }}</a>
                                            </li> --}}
                                        @else

                                            <li class="list-inline-item border-left-0 pl-0">
                                                @if (Auth::user()->user_type == 'seller')
                                                    <a href="{{ route('seller.dashboard') }}"
                                                       class="text-reset px-4 py-2 d-block">{{ translate('My Panel') }}</a>
                                                @else
                                                    <a href="{{ route('dashboard') }}"
                                                       class="text-reset py-2 d-block">{{ translate('My Panel') }}</a>
                                                @endif
                                            </li>
                                        @endif
                                        <a href="{{ route('logout') }}"
                                           class="text-reset py-2 d-block">{{ translate('Logout') }}</a>

                                        {{-- <li class="list-inline-item">
                                            <a href="{{ route('logout') }}"
                                                class="text-reset d-inline-block opacity-60 py-2">{{ translate('Logout') }}</a>
                                        </li> --}}
                                    @else
                                        {{--  <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                             <a href="{{ route('user.login') }}"
                                                 class="text-reset d-inline-block opacity-60 py-2">{{ translate('Login') }}</a>
                                         </li>
                                         <li class="list-inline-item">
                                             <a href="{{ route('user.registration') }}"
                                                 class="text-reset d-inline-block opacity-60 py-2">{{ translate('Registration') }}</a>
                                         </li> --}}
                                        <a href="{{ route('user.login') }}"
                                           class="text-reset px-4 py-2 d-block">{{ translate('Login') }}</a>
                                        <a href="{{ route('user.registration') }}"
                                           class="text-reset px-4 py-2 d-block">{{ translate('Registration') }}</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- @if (Route::currentRouteName() != 'home')
                <div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3"
                    id="hover-category-menu">
                    <div class="container">
                        <div class="row gutters-10 position-relative">
                            <div class="col-lg-3 position-static">
                                @include('frontend.partials.category_menu')
                            </div>
                        </div>
                    </div>
                </div>
            @endif --}}
        </div>
        @if (get_setting('header_menu_labels') != null)
            <div class="bg-white border-top border-gray-200 custom-z-index">
                <div class="container">
                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-left d-flex align-items-center">
                        <div class="list-inline-item mr-0 pull-bs-canvas-left">
                            <a href="#"
                               class="opacity-60 fs-14 px-3 py-1 d-inline-block fw-600 hov-opacity-100 text-reset">
                            <span class="d-flex align-items-center">
                                <i class="las la-bars la-2x mr-1"></i> All categories
                            </span>
                            </a>
                        </div>
                        @foreach (json_decode(get_setting('header_menu_labels'), true) as $key => $value)
                            <li class="list-inline-item mr-0">
                                <a href="{{ json_decode(get_setting('header_menu_links'), true)[$key] }}"
                                   class="opacity-60 fs-14 px-3 py-3 d-inline-block fw-600 hov-opacity-100 text-reset">
                                    {{ translate($value) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </header>

    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
