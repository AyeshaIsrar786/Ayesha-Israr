<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Travel</title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png">
        <!-- Base Css -->
        <link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="page-content">
            <!-- navber -->
            <?php include_once("config/header.php"); ?>
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header" style="background-image: url(assets/images/header-1920x1135-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Tours</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since </p>
                                    <div class="ui breadcrumb">
                                        <a href="index-2.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Hotel Grid</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hotel -->
            <section class="tour-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tools-ber">
                                <div class="row">
                                    <div class="col-sm-3 col-md-3 hidden-xs">
                                        <div class="input-group custom-search">
                                            <input type="text" class="form-control" placeholder="Search" />
                                            <span class="input-group-btn">
                                                <button class="btn hotel-search" type="button">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-2">
                                        <!-- filters select -->
                                        <div class="select-filters">
                                            <select name="sort_price" id="sort-price">
                                                <option value="" selected="">Sort by price</option>
                                                <option value="lower">Lowest price</option>
                                                <option value="higher">Highest price</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3 col-md-2">
                                        <!-- filters select -->
                                        <div class="select-filters">
                                            <select name="sort_price" id="sort-rank">
                                                <option value="" selected="">Sort by ranking</option>
                                                <option value="lower">Rank one</option>
                                                <option value="higher">Rank one</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-5 hidden-xs text-right">
                                        <a class="filters-btn collapse" data-toggle="collapse" href="#collapseMap"  onclick="init();"><i class="flaticon-earth-globe"></i></a>
                                        <a href="#" class="filters-btn"><i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i></a>
                                        <a href="#" class="filters-btn"><i class="flaticon-bulleted-list"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse map -->
                        <div class="col-sm-12">
                            <div class="collapse" id="collapseMap">
                                <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. --> 
                                <div id="map"></div>
                            </div>
                        </div>
                        <!-- sideber -->
                        <div class="col-sm-4 col-md-3">
                            <!-- price pips -->
                            <div class="sidber-box cats-price">
                                <div class="cats-title">Price</div>
                                <div class="price-Pips">
                                    <input type="text" id="range" value="range" name="range" />
                                </div>
                            </div>
                            <!-- star -->
                            <div class="sidber-box cats-star">
                                <div class="cats-title">
                                    Star Category
                                </div>
                                <div class="checkbox-star">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            <span class="star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Facility -->
                            <div class="sidber-box cats-facility">
                                <div class="cats-title">
                                    Facility
                                </div>
                                <div class="facility">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Pet allowed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Fitness center
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Restaurant
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Tour guides
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Groups allowed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Parking
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- help center -->
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Need <span>Help?</span></h4>
                                <a href="#" class="phone">+001620214460</a>
                                <small>Monday to Friday 9.00am - 7.30pm</small>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="hotel-list-content">
                                <div class="row grid-margin">
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">City sightseeing</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-2.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Historic Buildings</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-3.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Museums</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-4.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Mariott Hotel</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-5.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Pyramid</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-6.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Tour Eiffel Tour</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-7.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Beach Tour</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-8.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Mariott Hotel</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-9.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Adventure Toure</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-10.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">City Tours</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-11.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Mariott Hotel</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
                                        <div class="grid-item-inner">
                                            <div class="grid-img-thumb">
                                                <!-- ribbon -->
                                                <div class="ribbon"><span>Popular</span></div>
                                                <a href="#"><img src="assets/images/tour-370x370-12.jpg" alt="1" class="img-responsive" /></a>
                                            </div>
                                            <div class="grid-content">
                                                <div class="grid-price text-right">
                                                    Only <span><sub>$</sub>785</span>
                                                </div>
                                                <div class="grid-text">
                                                    <div class="place-name">Mariott Hotel</div>
                                                    <div class="travel-times">
                                                        <h4 class="pull-left">3 days 2 nights </h4>
                                                        <span class="pull-right">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- ../grid item -->
                                </div>
                            </div>
                            <!-- pagination -->
                            <div class="pagination-inner">
                                <!-- pager -->
                                <ul class="pager">
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                                <!-- pagination -->
                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter -->
            <section class="get-offer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <span>Subscribe to our Newsletter</span>
                            <h2>& Discover the best offers!</h2>
                        </div>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Address -->
                    <div class="col-sm-4 col-md-3">
                        <div class="footer-box address-inner">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the.  </p>
                            <div class="address">
                                <i class="flaticon-placeholder"></i>
                                <p>PO Box 16122 Collins Street<br>
                                    West Victoria 8007 Australia</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-customer-service"></i>
                                <p> +880153625892</p>
                            </div>
                            <div class="address">
                                <i class="flaticon-mail"></i>
                                <p><a href="http://travel.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b6a6f6662654b6c666a626725686466">[email&#160;protected]</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Information</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Pygmy miles</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Online Enquiry</a></li>
                                        <li><a href="#">Call us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Privacy & Cookies Policy</a></li>
                                        <li><a href="#">Become a partner</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Experiences</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Epic journeys</a></li>
                                        <li><a href="#">Hidden tribes</a></li>
                                        <li><a href="#">Eco lodges & tours</a></li>
                                        <li><a href="#">Endangered Wildlife</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-box">
                                    <h4 class="footer-title">Destinations</h4>
                                    <ul class="categoty">
                                        <li><a href="#">Europe</a></li>
                                        <li><a href="#">Africa</a></li>
                                        <li><a href="#">Asia</a></li>
                                        <li><a href="#">Oceania</a></li>
                                        <li><a href="#">North America</a></li>
                                        <li><a href="#">South America</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hidden-sm">
                        <div class="footer-box">
                            <h4 class="footer-title">Flickr Gallery</h4>
                            <ul class="gallery-list">
                                <li> <a href="#"><img src="assets/images/flickr-1.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-2.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-3.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-4.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-5.jpg" alt=""></a></li>
                                <li> <a href="#"><img src="assets/images/flickr-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Copyright Â© 2016. All rights reserved</p>
                        </div>
                        <div class="col-sm-7">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Forum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <!-- jquery ui js -->
        <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- fraction slider js -->
        <script src="assets/js/jquery.fractionslider.js" type="text/javascript"></script>
        <!-- owl carousel js --> 
        <script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <!-- counter -->
        <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/js/waypoints.js" type="text/javascript"></script>
        <!-- filter portfolio -->
        <script src="assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
        <script src="assets/js/portfolio.js" type="text/javascript"></script>
        <!-- magnific popup -->
        <script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <!-- range slider -->
        <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <!-- custom -->
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyCQ4twFS87Ji-69gchik7Vak4lEsxOCA6M"></script>
        <script src="assets/js/hotels.maps.js" type="text/javascript"></script>
        <script>
                                            //range slide
                                            $("#range").ionRangeSlider({
                                                type: "double",
                                                grid: true,
                                                min: 0,
                                                max: 200,
                                                from: 50,
                                                to: 150,
                                                prefix: "$"
                                            });
        </script>
    </body>

</html>