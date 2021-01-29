@extends('user.layouts.app')

@section('page_title')
    History
@endsection

@section('css')
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
                            <div class="col-md-12">
                                <div class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="row form-group">
                                            <div class="col-lg-1">
                                                <a class="btn btn-lg btn-success" href="{{ route('orders.history') }}">
                                                    {{ __('manage_borrowing.all') }}
                                                </a>
                                            </div>
                                        </div>
                                        <form method="get" action="{{ route('orders.history') }}">
                                            <div class="row form-group">
                                                <div class="col-lg-4">
                                                    <label>{{ __('manage_borrowing.title_author') }}</label>
                                                    <input type="search" class="form-control form-control-lg" placeholder="{{ __('manage_book.keyword') }}" name="text" value="{{ request()->get('text') }}">
                                                </div>
                                                <div class="col-lg-2">
                                                    <label>{{ __('manage_borrowing.status') }}</label>
                                                    <select class="form-control" name="status">
                                                        <option value="*" {{ request()->get('status') == "*" ? 'selected' : '' }}>{{ __('manage_borrowing.all') }}</option>
                                                        @foreach(config('user.order_status') as $key => $value)
                                                            <option value="{{ $key }}" {{ request()->get('status') == $key ? 'selected' : '' }}>{{ __('manage_borrowing.' . $value['text']) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label>{{ __('manage_borrowing.start_date') }}</label>
                                                    <input type="date" name="start_date" class="form-control" value="{{ request()->get('start_date') }}"/>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label>{{ __('manage_borrowing.end_date') }}</label>
                                                    <input type="date" name="end_date" class="form-control" value="{{ request()->get('end_date') }}"/>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label>{{ __('manage_borrowing.return_date') }}</label>
                                                    <input type="date" name="return_date" class="form-control" value="{{ request()->get('return_date') }}"/>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-11"></div>
                                                <div class="col-lg-1">
                                                    <button type="submit" class="btn btn-lg btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="booksmedia-fullwidth">
                                            <ul>
                                                @foreach($orders as $order)
                                                    <li>
                                                        <figure>
                                                            <img src="{{ asset('storage/images/' . $order->book->bookTitle->thumbnail) }}">
                                                            <figcaption>
                                                                <header>
                                                                    <h4>{{ $order->book->bookTitle->name }}</h4>
                                                                    <p>{{ $order->book->bookTitle->author }}</p>
                                                                </header>
                                                                <p class="btn-{{ $order->out_date ? config('user.order_status.3.color') : config('user.order_status.' . $order->status . '.color') }} disabled">
                                                                    {{ __('manage_borrowing.status') }} : {{ $order->out_date ? __('manage_borrowing.' . config('user.order_status.3.text')) : __('manage_borrowing.' . config('user.order_status.' . $order->status . '.text'))  }}
                                                                </p>
                                                                <p>
                                                                    {{ __('manage_borrowing.start_date') }}: {{ $order->start_date }}
                                                                </p>
                                                                <p>
                                                                    {{ __('manage_borrowing.end_date') }}: {{ $order->end_date }}
                                                                </p>
                                                                <p>
                                                                    {{ __('manage_borrowing.return_date') }}: {{ $order->return_date }}
                                                                </p>
                                                                <p>
                                                                    {{ __('manage_borrowing.fines') }}:
                                                                </p>
                                                            </figcaption>
                                                        </figure>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="form-control">
                                            {{ $orders->links() }}
                                        </div>
                                    </div>
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
