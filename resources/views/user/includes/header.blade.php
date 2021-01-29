<!-- Start: Header Section -->
<header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index-2.html">
                                        <img src="{{ asset('user/images/libraria-logo-v1.png') }}" alt="LIBRARIA" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">
                                <li class="dropdown {{ request()->is('/') || request()->is('home') ? 'active' : '' }}">
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="/">{{ __('app.home') }}</a>
                                </li>
                                @auth
                                    <li class="dropdown {{ request()->is('account/profile') ? 'active' : '' }}">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                           href="{{ route('user.profile') }}">{{ __('app.profile') }}</a>
                                    </li>
                                    <li class="dropdown {{ request()->is('account/orders/history') ? 'active' : '' }}">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled"
                                           href="{{ route('orders.history') }}">{{ __('app.history') }}</a>
                                    </li>
                                    @if (! Auth::user()->email_verified_at)
                                        <li>
                                            <form action="{{ route('verification.sendVerification') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-link" style="font-size: 14px; padding: 0; text-transform: uppercase;">
                                                    {{ __('app.verify_email') }}
                                                </button>
                                            </form>
                                        </li>
                                    @endif
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-link" style="font-size: 14px; padding: 0; text-transform: uppercase;">
                                                {{ __('app.logout') }}
                                            </button>
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{ route('index') }}">{{ __('app.login') }}</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
                @include('admin.shared.alert')
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Navigation</h4>
                                <a href="#" class="close"></a>
                            </li>
                            <li>
                                <a href="index-2.html">Home</a>
                                <ul>
                                    <li><a href="index-2.html">Home V1</a></li>
                                    <li><a href="home-v2.html">Home V2</a></li>
                                    <li><a href="home-v3.html">Home V3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="books-media-list-view.html">Books &amp; Media</a>
                                <ul>
                                    <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                    <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a>
                                    </li>
                                    <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a>
                                    </li>
                                    <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                    <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="news-events-list-view.html">News &amp; Events</a>
                                <ul>
                                    <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                    <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="signin.html">Signin/Register</a></li>
                                    <li><a href="404.html">404/Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Grid View</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- End: Header Section -->

<!-- Start: Page Banner -->
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header">
            <h2>Books & Media Listing</h2>
            <span class="underline center"></span>
            <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="/">Home</a></li>
                <li>@yield('page_title')</li>
            </ul>
        </div>
    </div>
</section>
