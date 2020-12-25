@extends('user.layouts.app')

@section('page_title')
    Login
@endsection

@section('css')
    <!-- Fonts -->
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
                                            <form action="{{ route('auth.login') }}" class="checkout woocommerce-checkout" method="post"
                                                  name="checkout">
                                                @csrf
                                                <div class="row">
                                                    <div id="customer_details">
                                                        <div class="col-xs-12">
                                                            <div class="woocommerce-billing-fields">
                                                                <h2>Login</h2>
                                                                <span class="underline left"></span>
                                                                <div class="row">
                                                                    <div class="billing-address-box">
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Email</label>
                                                                            <p id="billing_company_field"
                                                                               class="form-row form-row form-row-wide">
                                                                                <input type="email" class="@error('email') is-invalid @enderror"
                                                                                       placeholder="{{ __('app.email') }}" id="email"
                                                                                       name="email" class="input-text">
                                                                            @error('email')
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                            @enderror
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <label for="">Password</label>
                                                                            <p id="billing_company_field"
                                                                               class="form-row form-row form-row-wide">
                                                                                <input type="password" placeholder="{{ __('app.password') }}" id="password" name="password"
                                                                                       class="input-text">
                                                                            </p>
                                                                        </div>

                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <input type="checkbox" id="remember_me"
                                                                                   name="remember_me" class="input-text">

                                                                            <label for="">{{ __('remember me') }}</label>
                                                                        </div>
                                                                        <div class="clear"></div>

                                                                        <div class="col-xs-12 col-sm-12">
                                                                            <button type="submit" class="btn btn-default" name="login">{{ __('app.login') }}</button>
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

@endsection
