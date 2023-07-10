<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        
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
            <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. -->
            <div id="map" class="destination-map"></div>
            <section>
                <div class="portfolio-nav">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 hidden-sm thm-padding">
                                <div class="region">
                                    <h4>Select your Region</h4>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <ul class="portfolio-sorting list-inline text-center">
                                    <li><a href="#" data-group="all" class="active">All <span>50</span> </a></li>
                                    <li><a href="#" data-group="people">Asia <span>30</span></a></li>
                                    <li><a href="#" data-group="simpsons">Europe <span>10</span></a></li>
                                    <li><a href="#" data-group="simpsons">Australia <span>5</span></a></li>
                                    <li><a href="#" data-group="simpsons">Oceania<span>3</span></a></li>
                                    <li><a href="#" data-group="futurama">North America <span>7</span></a></li>
                                    <li><a href="#" data-group="futurama">South America <span>15</span></a></li>
                                </ul> <!--end portfolio sorting -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="destination">
                    <div class="container">
                        <div class="row">
                            <!-- sideber -->
                            <div class="col-sm-4 col-md-3">
                                <div class="sidber-box cats-widget">
                                    <div class="cats-title">
                                        All Destination <span>91</span>
                                    </div>
                                    <ul>	
                                        <li><a href="#">Bangladesh</a> <span>50</span></li>
                                        <li><a href="#">India</a> <span>12</span></li>
                                        <li><a href="#">Australia</a> <span>9</span></li>
                                        <li><a href="#">Singapore</a> <span>32</span></li>
                                        <li><a href="#">China</a> <span>50</span></li>
                                        <li><a href="#">Canada</a> <span>22</span></li>
                                        <li><a href="#">Chile</a> <span>39</span></li>
                                        <li><a href="#">Vientiane</a> <span>12</span></li>
                                        <li><a href="#">America</a> <span>9</span></li>
                                        <li><a href="#">Myanmar</a> <span>32</span></li>
                                        <li><a href="#">Netherlands</a> <span>22</span></li>
                                        <li><a href="#">Norway</a> <span>39</span></li>
                                    </ul>
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
                                <div class="row thm-margin">
                                    <div class="portfolio-items list-unstyled" id="grid">
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["people"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Sydney</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Sydney Opera House</h5>
                                                    <h4>Sydney</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["people"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-2.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Brazil</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Fernando de Noronha</h5>
                                                    <h4>Brazil</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["futurama"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-3.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Istanbul</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Aya Sofya</h5>
                                                    <h4>Istanbul</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["futurama"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-4.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>India</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Taj Mahal</h5>
                                                    <h4>India</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["simpsons", "people"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-5.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Italy</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Canals of Venice</h5>
                                                    <h4>Italy</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["simpsons"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-6.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Paris</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Eiffel Tower</h5>
                                                    <h4>Paris</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["people"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-7.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>London</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Hop on Hop off Bus Tour</h5>
                                                    <h4>London</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["simpsons"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-8.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>London</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Hop on Hop off Bus Tour</h5>
                                                    <h4>London</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4 thm-padding" data-groups='["futurama"]'>
                                            <div class="destination-grid">
                                                <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2>Sydney</h2>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                                    <a href="#" class="thm-btn">Read More</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h5>Sydney Opera House</h5>
                                                    <h4>Sydney</h4>
                                                </div>
                                                <div class="dest-icon">
                                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sizer -->
                                        <div class="col-md-4 col-sm-6 col-xs-12 shuffle_sizer"></div>
                                    </div> <!--end portfolio grid -->
                                </div>
                            </div>
                        </div> <!--end row -->
                    </div> <!-- end container-->
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
                                <p> <a href="http://travel.bdtask.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f190959c989fb1969c90989ddf929e9c">[email&#160;protected]</a></p>
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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyDcMXKkIZSG1Ev3nNkDE5vZpfT_KG9zBT8"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 3, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(38.963745, 35.243322), //turkey

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
                };

                // image from external URL

                var myIcon = 'assets/images/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon,
                }

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(20.593684, 78.96288), //India
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.810332, 90.4125181), //bangladesh
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(28.394857, 84.124008), //nepal
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(41.0082376, 28.9783589), //Istanbul
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.5073509, -0.1277583), //London
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(41.87194, 12.56738), //Italy
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.963745, 35.243322), //turkey
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(39.0785908, -3.74922), //spain
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
    </body>

</html>