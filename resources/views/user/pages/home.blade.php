@extends('user.layouts.app')

@section('page_title')
    Books
@endsection

@section('css')
    <!-- Mobile Menu -->
    <link href="{{ asset('user/css/mmenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user/css/bootstrap-utilities.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-full-width">
                    <div class="container">
                        <!-- Start: Search Section -->
                        <section class="search-filters">
                            <div class="filter-box">
                                <h3>{{ __('home.head_title') }}</h3>
                                <form action="{{ route('home') }}" method="get">
                                    <div class="col-md-10">
                                        <div class="col-md-8 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="{{ __('manage_book.keyword') }}" id="keywords"
                                                       name="keywords" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <select name="genre" id="genre" class="form-control">
                                                    <option value="*">{{ __('genres.all_genres') }}</option>
                                                    @foreach($genres as $genre)
                                                        <option>{{ $genre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <select name="sort_by" id="sort_by" class="form-control">
                                                    <option value="newness">{{ __('home.sort_by_date') }}</option>
                                                    <option value="title">{{ __('home.sort_by_title') }}</option>
                                                    <option value="popularity">{{ __('home.sort_by_popularity') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <select name="sort_type" id="sort_type" class="form-control">
                                                    <option value="asc">{{ __('home.sort_type') }}</option>
                                                    <option value="asc">{{ __('home.sort_asc') }}</option>
                                                    <option value="desc">{{ __('home.sort_desc') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Search">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input id="reset" class="form-control btn bg-secondary" type="button" value="Reset">
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div class="clear"></div>
                        </section>
                        <!-- End: Search Section -->

                        <div class="filter-options margin-list">
                            @if(request()->has('keywords') && !in_array(request('genre'),['*',null]))
                            <h1 class="mb-4">{{ __('home.search_filter') }}:
                                    <span class="badge rounded-pill bg-primary">{{ request('keywords') }}</span>
                                    <span class="badge rounded-pill bg-warning">{{ request('genre') }}</span>
                            </h1>
                            @endif
                        </div>
                        <div class="booksmedia-fullwidth">
                            <ul>
                                @foreach($bookTitles as $title)
                                    <li>
                                    <div class="book-list-icon yellow-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html">
                                            <img src="{{ asset(Storage::url($title->thumbnail)) }}"
                                                alt="Book"
                                                style="min-height: 540px"
                                            >
                                        </a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="/book-detail">{{ $title->name }}</a></h4>
                                                <p><strong>{{ __('book_titles.author') }}:</strong> {{ $title->author }}</p>
                                                <p><strong>{{ __('book_titles.id') }}:</strong> {{ $title->id }}</p>
                                            </header>
                                            <p>{{ $title->description }}</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Add TO CART">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Share">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <nav class="navigation pagination text-center">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                {{ $bookTitles->appends(request()->except('page'))->links() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span>
                            <i class="fa fa-rss"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->
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
