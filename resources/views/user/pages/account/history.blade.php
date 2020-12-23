@extends('user.layouts.app')

@section('page_title')
    History
@endsection

@section('css')
    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Responsive Table -->
    <link rel="stylesheet" type="text/css" href="css/responsivetable.css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="cart-main">
                    <div class="container">
                        <div class="row">
                            <div class="cart-head">
                                <div class="col-xs-12 col-sm-6 account-option">
                                    <strong>Scott Fitzgerald</strong>
                                    <ul>
                                        <li><a href="#">Edit Account</a></li>
                                        <li class="divider">|</li>
                                        <li><a href="#">Edit Pin </a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6 library-info">
                                    <ul>
                                        <li>
                                            <strong>Home Library:</strong>
                                            Stephen A. Schwarzman Building
                                        </li>
                                        <li>
                                            <strong>Email:</strong>
                                            <a href="mailto:scottfitzgerald@gmail.com">scottfitzgerald@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce table-tabs" id="responsiveTabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <b class="arrow-up"></b>
                                                    <a data-toggle="tab" href="#sectionA">History</a>
                                                </li>
                                                <li>
                                                    <b class="arrow-up"></b>
                                                    <a data-toggle="tab" href="#sectionB">Activities</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="sectionA" class="tab-pane fade in active">
                                                    <form method="post"
                                                        action="http://libraria.demo.presstigers.com/cart-page.html">
                                                        <table class="table table-bordered shop_table cart">
                                                            <thead>
                                                                <tr>
                                                                    {{-- <th
                                                                        class="product-name">&nbsp;</th>
                                                                    --}}
                                                                    <th class="product-name">Title</th>
                                                                    <th class="">Status</th>
                                                                    <th class="">Borrow Date</th>
                                                                    <th class="">Expected Return Date </th>
                                                                    <th class="">Actual Return Date </th>
                                                                    <th class="">Fines </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cart_item">
                                                                    {{-- <td data-title="cbox"
                                                                        class="product-cbox">
                                                                        <span>
                                                                            <input type="checkbox" id="cbox3"
                                                                                value="first_checkbox">
                                                                        </span>
                                                                    </td> --}}
                                                                    <td data-title="Product" class="product-name">
                                                                        <span class="product-thumbnail">
                                                                            <a href="#"><img
                                                                                    src="{{ asset('user/images/cart/cart-product-1.jpg') }}"
                                                                                    alt="cart-product-1"></a>
                                                                        </span>
                                                                        <span class="product-detail">
                                                                            <a href="#">
                                                                                <strong>The Great Gatsby</strong>
                                                                            </a>
                                                                            <span><strong>Author:</strong> F. Scott
                                                                                Fitzgerald</span>
                                                                        </span>
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        Borrowing
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        01/01/2020
                                                                    </td>
                                                                    <td class="">
                                                                        01/06/2020
                                                                    </td>
                                                                    <td class="">
                                                                        20/04/2020
                                                                    </td>
                                                                    <td class="">
                                                                        0
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart_item bg-success">
                                                                    <td data-title="Product" class="product-name">
                                                                        <span class="product-thumbnail">
                                                                            <a href="#"><img
                                                                                    src="{{ asset('user/images/cart/cart-product-2.jpg') }}"
                                                                                    alt="cart-product-2"></a>
                                                                        </span>
                                                                        <span class="product-detail">
                                                                            <a href="#">
                                                                                <strong>The Great Gatsby</strong>
                                                                            </a>
                                                                            <span><strong>Author:</strong> F. Scott
                                                                                Fitzgerald</span>
                                                                        </span>
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        Returned
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        01/01/2020
                                                                    </td>
                                                                    <td class="">
                                                                        01/06/2020
                                                                    </td>
                                                                    <td class="">
                                                                        20/04/2020
                                                                    </td>
                                                                    <td class="">
                                                                        0
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart_item bg-danger">
                                                                    <td data-title="Product" class="product-name">
                                                                        <span class="product-thumbnail">
                                                                            <a href="#"><img
                                                                                    src="{{ asset('user/images/cart/cart-product-2.jpg') }}"
                                                                                    alt="cart-product-2"></a>
                                                                        </span>
                                                                        <span class="product-detail">
                                                                            <a href="#">
                                                                                <strong>The Great Gatsby</strong>
                                                                            </a>
                                                                            <span><strong>Author:</strong> F. Scott
                                                                                Fitzgerald</span>
                                                                        </span>
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        Returned late
                                                                    </td>
                                                                    <td data-title="" class="">
                                                                        01/01/2020
                                                                    </td>
                                                                    <td class="">
                                                                        01/06/2020
                                                                    </td>
                                                                    <td class="">
                                                                        20/04/2020
                                                                    </td>
                                                                    <td class="">
                                                                        100.000d
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
                                                </div>
                                                <div id="sectionB" class="tab-pane fade in">
                                                    <h5>Lorem Ipsum Dolor</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable. If you are going to use a passage of Lorem
                                                        Ipsum, you need to be sure there isn't anything embarrassing
                                                        hidden in the middle of text. All the Lorem Ipsum generators on
                                                        the Internet tend to repeat predefined chunks as necessary,
                                                        making this the first true generator on the Internet.</p>
                                                </div>
                                            </div>
                                        </div><!-- .entry-content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->
@endsection


@section('js')
    <!-- jQuery Latest Version 1.x -->
    <script type="text/javascript" src="{{ asset('user/js/jquery-1.12.4.min.js') }}"></script>

    <!-- jQuery UI -->
    <script type=" text/javascript" src="{{ asset('user/js/jquery-ui.min.js') }}"></script>

    <!-- jQuery Easing -->
    <script type=" text/javascript" src="{{ asset('user/js/jquery.easing.1.3.js') }}"></script>

    <!-- Bootstrap -->
    {{-- <script type=" text/javascript" src="{{ asset('user/js/bootstrap.min.js') }}">
    </script>
    --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Mobile Menu -->
    <script type=" text/javascript" src="{{ asset('user/js/mmenu.min.js') }}"></script>

    <!-- Harvey - State manager for media queries -->
    <script type=" text/javascript" src="{{ asset('user/js/harvey.min.js') }}"></script>

    <!-- Waypoints - Load Elements on View -->
    <script type=" text/javascript" src="{{ asset('user/js/waypoints.min.js') }}"></script>

    <!-- Facts Counter -->
    <script type=" text/javascript" src="{{ asset('user/js/facts.counter.min.js') }}"></script>

    <!-- MixItUp - Category Filter -->
    <script type=" text/javascript" src="{{ asset('user/js/mixitup.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script type=" text/javascript" src="{{ asset('user/js/owl.carousel.min.js') }}"></script>

    <!-- Accordion -->
    <script type=" text/javascript" src="{{ asset('user/js/accordion.min.js') }}"></script>

    <!-- Responsive Tabs -->
    <script type=" text/javascript" src="{{ asset('user/js/responsive.tabs.min.js') }}"></script>

    <!-- Responsive Table -->
    <script type=" text/javascript" src="{{ asset('user/js/responsive.table.min.js') }}"></script>

    <!-- Masonry -->
    <script type=" text/javascript" src="{{ asset('user/js/masonry.min.js') }}"></script>

    <!-- Carousel Swipe -->
    <script type=" text/javascript" src="{{ asset('user/js/carousel.swipe.min.js') }}"></script>

    <!-- bxSlider -->
    <script type=" text/javascript" src="{{ asset('user/js/bxslider.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script type=" text/javascript" src="{{ asset('user/js/main.js') }}"></script>
@endsection
