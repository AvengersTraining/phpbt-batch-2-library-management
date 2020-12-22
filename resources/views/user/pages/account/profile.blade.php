@extends('user.layouts.app')

@section('page_title')
    User Profile
@endsection

@section('css')
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <!-- Start: Form -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="checkout-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <form action="/users/123" class="checkout woocommerce-checkout" method="post"
                                                name="checkout">
                                                {{-- <div class="row">
                                                    <div class="col-sm-12">
                                                        <h2>Contact Information</h2>
                                                        <span class="underline left"></span>
                                                        <div class="woocommerce-info">
                                                            <div class="col-sm-7">
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Email Address</span>
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="text" value="" class="input-text">
                                                                </p>
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Password</span>
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="password" value="" class="input-text">
                                                                </p>
                                                                <input type="submit" class="btn btn-default" name="Login"
                                                                    value="Login">
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <h3>Create New Account</h3>
                                                                <div class="radio">
                                                                    <input id="register" type="radio" value="register"
                                                                        name="register">
                                                                    <label for="register">Register and Checkout</label>
                                                                    <h3>Checkout as Guest</h3>
                                                                    <input id="checkout" type="radio" value="checkout"
                                                                        name="register">
                                                                    <label for="checkout">Checkout without
                                                                        registration</label>
                                                                </div>
                                                                <input type="submit" class="btn btn-default" name="continue"
                                                                    value="Continue">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div id="customer_details">
                                                        <div class="col-xs-12">
                                                            <div class="woocommerce-billing-fields">
                                                                <h2>Your profile</h2>
                                                                <span class="underline left"></span>
                                                                <div class="row">
                                                                    <div class="billing-address-box">
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Email</label>
                                                                            <p id="billing_company_field"
                                                                                class="form-row form-row form-row-wide">
                                                                                <input type="email"
                                                                                    value="youremail@gmail.com" id="email"
                                                                                    name="email" class="input-text"
                                                                                    disabled>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Username</label>
                                                                            <p id="billing_company_field"
                                                                                class="form-row form-row form-row-wide">
                                                                                <input type="text" value="username"
                                                                                    id="username" name="username"
                                                                                    class="input-text" disabled>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Citizen Indentification</label>
                                                                            <p id="billing_company_field"
                                                                                class="form-row form-row form-row-wide">
                                                                                <input type="text" value="033200001234"
                                                                                    id="citizen_id" name="citizen_id"
                                                                                    class="input-text" disabled>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Phone</label>
                                                                            <p id="billing_company_field"
                                                                                class="form-row form-row form-row-wide">
                                                                                <input type="text" value="0378383456"
                                                                                    id="phone" name="phone"
                                                                                    class="input-text" disabled>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <label for="">First name</label>
                                                                            <p id="billing_first_name_field"
                                                                                class="form-row form-row form-row-first">
                                                                                <input type="text" value=""
                                                                                    autocomplete="given-name"
                                                                                    placeholder="First Name" id="first_name"
                                                                                    name="first_name" class="input-text">
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <label for="">Last name</label>
                                                                            <p id="billing_last_name_field"
                                                                                class="form-row form-row form-row-last validate-required">
                                                                                <input type="text" value=""
                                                                                    autocomplete="family-name"
                                                                                    placeholder="Last Name" id="last_name"
                                                                                    name="last_name" class="input-text">
                                                                            </p>
                                                                        </div>
                                                                        <div class="clear"></div>

                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Address</label>
                                                                            <p id="billing_address_1_field"
                                                                                class="form-row form-row form-row-wide address-field validate-required">
                                                                                <input type="text" value=""
                                                                                    placeholder="Address" name="address"
                                                                                    class="input-text">
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <input type="submit" class="btn btn-default"
                                                                                name="Login" value="Update">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- .entry-content -->
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Form -->
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
