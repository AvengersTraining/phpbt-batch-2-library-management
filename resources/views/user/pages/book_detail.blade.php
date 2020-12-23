@extends('user.layouts.app')

@section('page_title')
    Book Detail
@endsection

@section('css')
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
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
    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword"
                                                        id="keywords" name="keywords" type="text">
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
                                </div>
                            </section>
                            <!-- End: Search Section -->
                        </div>
                        <div class="booksmedia-detail-box">
                            <div class="detailed-box">
                                <div class="col-xs-12 col-sm-5 col-md-3">
                                    <div class="post-thumbnail">
                                        <div class="book-list-icon blue-icon"></div>
                                        <img src="user/images/books-media/detail-page/detail-page-image.jpg"
                                            alt="Book Image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-6">
                                    <div class="post-center-content">
                                        <h2>The Great Gatsby</h2>
                                        <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                        <p><strong>ISBN:</strong> 9781581573268, 9780062419385</p>
                                        <p><strong>Rating:</strong> </p>
                                        <p><strong>Edition:</strong> First edition</p>
                                        <p><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</p>
                                        <p><strong>Length:</strong> 518 pages.</p>
                                        <p><strong>Format:</strong> DVD</p>
                                        <p><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</p>
                                        <p><strong>Genre :</strong> Feature films, Fiction films, Drama</p>
                                        <p><strong>Topics:</strong> Friendship, Bullies, Pranks, School</p>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Add To Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Like">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Mail">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Print">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                                        title="" data-original-title="Print">
                                                        <i class="fa fa-share-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 ">
                                    <div class="post-right-content">
                                        <h4>Available now</h4>
                                        <p><strong>Total Copies:</strong> 01</p>
                                        <p><strong>Available:</strong> 019780062419385</p>
                                        <p><strong>Holds:</strong> 01</p>
                                        <p><strong>On the shelves now at:</strong> Lawrence Public Library</p>
                                        <p><strong>Call #:</strong> 747 STRUTT C</p>
                                        <a href="#." class="available-location">Availability by Location <i
                                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                        <a href="#." class="btn btn-dark-gray">View sample</a>
                                        <a href="#." class="btn btn-dark-gray">Find Similar Titles</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                            <p><strong>Summary:</strong> There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration in some form, by injected humour, or randomised words
                                which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,
                                you need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                                Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
                                this the first true generator on the Internet. </p>

                            <div class="table-tabs" id="responsiveTabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Copies:
                                            05</a></li>
                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB">Reviews (12)</a></li>
                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC">Table of Contents</a>
                                    </li>
                                    <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD">Novelist
                                            Recommendations</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="sectionA" class="tab-pane fade in active">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Library Name</th>
                                                    <th>Shelf Number</th>
                                                    <th>Material Type</th>
                                                    <th>Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Oak Park Public Library Main Branch</td>
                                                    <td>B PURMORT</td>
                                                    <td>Book</td>
                                                    <td>In Processing</td>
                                                </tr>
                                                <tr>
                                                    <td>Bedford Park Public Library District</td>
                                                    <td>616.99 PUR</td>
                                                    <td>Book</td>
                                                    <td>Due 8/24/16</td>
                                                </tr>
                                                <tr>
                                                    <td>Blue Island Public Library</td>
                                                    <td>BIO PUR</td>
                                                    <td>eBook</td>
                                                    <td>Due 8/24/16</td>
                                                </tr>
                                                <tr>
                                                    <td>Bridgeview Public Library</td>
                                                    <td>B PUR</td>
                                                    <td>DVD</td>
                                                    <td>In Processing</td>
                                                </tr>
                                                <tr>
                                                    <td>Eisenhower Public Library District</td>
                                                    <td>616.994 PUR</td>
                                                    <td>Magazine</td>
                                                    <td>Checked In</td>
                                                </tr>
                                                <tr>
                                                    <td>Forest Park Public Library</td>
                                                    <td>BIO PURMORT</td>
                                                    <td>Magazine</td>
                                                    <td>Checked In</td>
                                                </tr>
                                                <tr>
                                                    <td>Hinsdale Public Library</td>
                                                    <td>B PUR</td>
                                                    <td>Audio</td>
                                                    <td>Checked In</td>
                                                </tr>
                                                <tr>
                                                    <td>Oak Park Public Library Maze Branch</td>
                                                    <td>616.99 PUR</td>
                                                    <td>Audio</td>
                                                    <td>Due 9/10/16</td>
                                                </tr>
                                                <tr>
                                                    <td>River Grove Public Library District</td>
                                                    <td>616.994 PURMORT</td>
                                                    <td>Book</td>
                                                    <td>Due 9/10/16</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="sectionB" class="tab-pane fade in">
                                        <h5>Lorem Ipsum Dolor</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                    </div>
                                    <div id="sectionC" class="tab-pane fade in">
                                        <h5>Lorem Ipsum Dolor</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                    </div>
                                    <div id="sectionD" class="tab-pane fade in">
                                        <h5>Lorem Ipsum Dolor</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                    </div>
                                    <div id="sectionE" class="tab-pane fade in">
                                        <h5>Lorem Ipsum Dolor</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                    </div>
                                    <div id="sectionF" class="tab-pane fade in">
                                        <h5>Lorem Ipsum Dolor</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a passage of
                                            Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the
                                            Internet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->
    <div class="booksmedia-fullwidth">
        <div class="container">
            <h2 class="section-title text-center">Popular Items</h2>
            <span class="underline center"></span>
            <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <ul class="popular-items-detail-v2">
                <li>
                    <div class="book-list-icon blue-icon"></div>
                    <figure>
                        <img src="user/images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
                        <img src="user/images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
                        <img src="user/images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
                        <img src="user/images/books-media/layout-3/books-media-layout3-01.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
                        <img src="user/images/books-media/layout-3/books-media-layout3-02.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
                        <img src="user/images/books-media/layout-3/books-media-layout3-03.jpg" alt="Book">
                        <figcaption>
                            <header>
                                <h4><a href="#.">The Great Gatsby</a></h4>
                                <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                                <p><strong>ISBN:</strong> 9781581573268</p>
                            </header>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.</p>
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Add To Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Like">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Mail"><i class="fa fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Search">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top"
                                            title="Print">
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
    </div>
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
