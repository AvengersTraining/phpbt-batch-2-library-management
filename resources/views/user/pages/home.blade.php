@extends('user.layouts.app')

@section('page_title')
    Books
@endsection

@section('css')
    <!-- Mobile Menu -->
    <link href="{{ asset('user/css/mmenu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />

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
                                <h3>What are you looking for at the library?</h3>
                                <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Search by Keyword" id="keywords"
                                                name="keywords" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="catalog" id="catalog" class="form-control">
                                                <option>Search the Catalog</option>
                                                <option>Catalog 01</option>
                                                <option>Catalog 02</option>
                                                <option>Catalog 03</option>
                                                <option>Catalog 04</option>
                                                <option>Catalog 05</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option>All Categories</option>
                                                <option>Category 01</option>
                                                <option>Category 02</option>
                                                <option>Category 03</option>
                                                <option>Category 04</option>
                                                <option>Category 05</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="clear"></div>
                        </section>
                        <!-- End: Search Section -->

                        <div class="filter-options margin-list">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <select name="orderby">
                                        <option selected="selected">Sort by Title</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by rating</option>
                                        <option>Sort by newness</option>
                                        <option>Sort by price</option>
                                    </select>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <select name="orderby">
                                        <option selected="selected">Sort by Author</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by rating</option>
                                        <option>Sort by newness</option>
                                        <option>Sort by price</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <select name="orderby">
                                        <option selected="selected">Language</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by rating</option>
                                        <option>Sort by newness</option>
                                        <option>Sort by price</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <select name="orderby">
                                        <option selected="selected">Publishing Date</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by rating</option>
                                        <option>Sort by newness</option>
                                        <option>Sort by price</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-12 pull-right">
                                    <div class="filter-toggle">
                                        <a href="books-media-gird-view-v2.html" class="active"><i
                                                class="glyphicon glyphicon-th-large"></i></a>
                                        <a href="books-media-list-view.html"><i class="glyphicon glyphicon-th-list"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booksmedia-fullwidth">
                            <ul>
                                <li>
                                    <div class="book-list-icon blue-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-01.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                                            data-placement="top" title="Mail">
                                                            <i class="fa fa-envelope"></i>
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
                                <li>
                                    <div class="book-list-icon yellow-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-02.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon green-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-03.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon yellow-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-04.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon blue-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-05.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon red-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-06.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon green-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-07.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon light-green-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-07.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                                <li>
                                    <div class="book-list-icon red-icon"></div>
                                    <figure>
                                        <a href="books-media-detail-v2.html"><img
                                                src="user/images/books-media/layout-3/books-media-layout3-09.jpg"
                                                alt="Book"></a>
                                        <figcaption>
                                            <header>
                                                <h4><a href="books-media-detail-v2.html">The Great Gatsby</a></h4>
                                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                                <p><strong>ISBN:</strong> 9781581573268</p>
                                            </header>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. Pellentesque
                                                dolor turpis, pulvinar varius.</p>
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
                            </ul>
                        </div>
                        <nav class="navigation pagination text-center">
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i>
                                    Previous</a>
                                <a class="page-numbers" href="#.">1</a>
                                <span class="page-numbers current">2</span>
                                <a class="page-numbers" href="#.">3</a>
                                <a class="page-numbers" href="#.">4</a>
                                <a class="next page-numbers" href="#.">Next <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </nav>
                    </div>
                    <!-- Start: Staff Picks -->
                    <section class="team staff-picks">
                        <div class="container">
                            <div class="center-content">
                                <h2 class="section-title">Staff Picks</h2>
                                <span class="underline center"></span>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="team-list">
                                <div class="team-member">
                                    <figure>
                                        <img src="user/images/books-media/staff-pick/staff-picks-01.jpg" alt="Staff Pick" />
                                    </figure>
                                    <div class="content-block">
                                        <div class="member-info">
                                            <div class="member-thumb">
                                                <img src="user/images/books-media/staff-pick/gail.jpg" alt="Katherine">
                                            </div>
                                            <div class="member-content">
                                                <span class="designation">Downtown & Business</span>
                                                <h4>The Collector</h4>
                                                <ul class="social">
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here...</p>
                                            <a class="btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <figure>
                                        <img src="user/images/books-media/staff-pick/staff-picks-02.jpg" alt="Staff Pick" />
                                    </figure>
                                    <div class="content-block">
                                        <div class="member-info">
                                            <div class="member-thumb">
                                                <img src="user/images/books-media/staff-pick/katherine.jpg" alt="Katherine">
                                            </div>
                                            <div class="member-content">
                                                <span class="designation">Katherine, West End</span>
                                                <h4>Mongolia</h4>
                                                <ul class="social">
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here...</p>
                                            <a class="btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member">
                                    <figure>
                                        <img src="user/images/books-media/staff-pick/staff-picks-03.jpg" alt="Staff Pick" />
                                    </figure>
                                    <div class="content-block">
                                        <div class="member-info">
                                            <div class="member-thumb">
                                                <img src="user/images/books-media/staff-pick/chris.jpg" alt="Katherine">
                                            </div>
                                            <div class="member-content">
                                                <span class="designation">Chris, East Liberty</span>
                                                <h4>The Revolution</h4>
                                                <ul class="social">
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-skype"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using 'Content here...</p>
                                            <a class="btn btn-primary" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End: Staff Picks -->
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
