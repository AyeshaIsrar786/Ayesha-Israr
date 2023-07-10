<?php 
include("config/connection.php"); 
							
session_start();
$user_id=$_SESSION['id'];
if(empty($_SESSION['id'])){
	
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    
<?php include("config/head.php"); ?>
    <body>
        
        <div id="page-content">
            <!-- navber -->
            <?php include("config/header.php"); ?> 
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header header-bg-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Tour Details</h1>
                                   
                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Tour details</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tour details -->
            <section class="tour-details-inner">
                <div class="container">
                    <div class="row">
						<?php 
						$user_id = mysqli_real_escape_string($conn,$_GET['id']);
						$qry="SELECT * FROM package_add WHERE id='$user_id'";
						$exe_qry = mysqli_query($conn,$qry);
						while($data=mysqli_fetch_array($exe_qry)){
						
						?>
                        <div class="col-md-8 col-sm-8">
                            <div id="tour-slide" class="owl-carousel owl-theme">
                                <div class="item"><img src="../travel-admin/image/<?php echo $data['image']; ?>" class="img-responsive" alt=""></div>
                               
                            </div>
                            <h3><?php echo $data['title']; ?></h3>
							<label></label>
                            <h2>Date:&nbsp;<?php echo $data['date']; ?>
                            <h2>Time:&nbsp;<?php echo $data['time']; ?>
                            </h2>
                            
                            <div class="separator"></div>
                            <div class="tour_view_map">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3>Map</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- The element that will contain Google Map. This is used in both the Javascript and CSS above. -->
                                        <div id="map"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box_map">
                                            <i class="flaticon-car"></i>
                                            <h4>By Train/tube</h4>
                                            <p></p>
                                        </div>
                                        <div class="box_map">
                                            <i class="flaticon-ship"></i>
                                            <h4>By bus</h4>
                                            <p></p>
                                        </div>
                                        <div class="box_map">
                                            <i class="flaticon-car"></i>
                                            <h4>By Taxi/cabs</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator"></div>
                            <div class="comments-container">
                                <h3>Reviews </h3>
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="assets/images/avtar-1.jpg" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <cite class="comment-author">Hamza</cite>
                                                    <div class="review_rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                                    </div>
                                                    <p>Good Company..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="assets/images/avtar-1.jpg" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <cite class="comment-author">Salman</cite>
                                                    <div class="review_rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                                    </div>
                                                    <p>hi?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="assets/images/avtar-1.jpg" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment-content">
                                                    <cite class="comment-author">Abdullah</cite>
                                                    <div class="review_rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>                                                 </div>
                                                    <p>provide comfortable environment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Comment Form -->
                            <div class="comment-form">
                                <h3>Leave a Review</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name*" required >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email2" name="email2" placeholder="Your Email*" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="select-filters">
                                                <select name="room_type" id="sort-price">
                                                    <option value="" selected="">Rating</option>
                                                    <option value="1">1 (lowest)</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5 (medium)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="message" placeholder="Your Comment*" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="verify_booking2" name="verify_booking" placeholder="Are you human? 3 + 1 =">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <a href="#" class="thm-btn">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="sidber-box booking_price">
                                <div class="price">
                                    <strong>Rs:<?php echo $data['price']; ?></strong><small>per person</small>
                                </div>

                                <ul class="list-ok">
                                    <li>3 Day & 2 Nights</li>
                                    <li>There are many variations</li>
                                    <li>In pellentesque arcu at diam</li>
                                    <li>Have Save Journey</li>
                                    <li>Its available for a group of 25 to 30 people. if you are less then 25 this ammount rates are still same,</li>
									
                                </ul>
                                <div class="offer">*Free for childs under 8 years old</div>
                            </div>
                            <!-- booking -->
                            <div class="sidber-box tags-widget">
                                <div class="cats-title">Booking</div>
                                <div class="booking-form tour_booking">
                                    <?php
						if(isset($_POST['submit']))
                        {
                       
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $set_price=$_POST['set_price'];
                            $total_price=$_POST['total_price'];
                            $phone=$_POST['phone'];
                            $seats=$_POST['seats'];
                            $services=$_POST['services'];
                            $country=$_POST['country'];
                            
                            
                            $qry2="INSERT INTO booking(name,email,   set_seat_price,total_price,phone,seats,services,country,user_id) VALUES('$name','$email','$set_price','$total_price','$phone','$seats','$services','$country','$user_id')";
                            $exe_qry = mysqli_query($conn,$qry2);
                            if($exe_qry)
                            {
                                ?>
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <strong>Congratst</strong> Successfully Submit
                                    <button type="button" class="close" data-dismis="alert" aria-lable="close">
                                  
                                    </button>
                                </div>
                          <?php       

                            }
                                    
                        }
                                    
?>
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                                </div>
                                            </div>
											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Per Seat Price</label>
													
							<?php 
							$id=$_GET['id'];
							$qry="SELECT * FROM package_add WHERE id='$id'";
							$exe_qry = mysqli_query($conn,$qry);
							while($data=mysqli_fetch_array($exe_qry)){
												?>
                                                    <input type="text" class="form-control" id="amount" name="set_price" placeholder="Enter Your Price" readonly value="<?php echo $data['price']; ?>">
													<?php } ?>
													
												
                                                </div>
                                            </div>
											 <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Total Price</label>
                                                    <input type="text" class="form-control" id="price" name="total_price" placeholder="Enter Your price" readonly >
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" onkeypress='validate(event)'  maxlength="11">
                                                </div> </div>
												
										<div class="col-sm-12">
                                           <div class="form-group">
                                              <label>Select Seats</label>
                                               <select class="form-control" name="seats" id="paid" onclick="myFunction()">
											   <option value="0">Select</option>
											   <option value="1">1</option>
											   <option value="2">2</option>
											   <option value="3">3</option>
											   <option value="4">4</option>
											   <option value="5">5</option>
											   <option value="6">6</option>
											   <option value="7">7</option>
											   <option value="8">8</option>
											   <option value="9">9</option>
											   <option value="10">10</option>
											   </select>
                                                </div>
                                            </div>
                                        <div class="col-sm-12">
                                           <div class="form-group">
                                              <label>Select Services</label>
                                               <select class="form-control" name="services">
										 <option>Select</option>
											   <option>By Air</option>
											   </select>
                                                </div>
                                            </div> 
											<div class="col-sm-12">
												  <div class="form-group">
													   <label>Select Country</label>
										   <select class="form-group form-control" name="country">
											<option>Select</option>
											<option>Pakistan To Dubai</option>
											<option>Pakistan To India</option>
											<option>Pakistan To Turki</option>
											<option>Pakistan To Australia</option>
											<option>Pakistan To New Zeland</option>
											<option>Pakistan To South Africa</option>
											<option>Pakistan To Oman</option>
											<option>Pakistan To Saudi Arabia</option>
											<option>Pakistan To England</option>
											<option>Pakistan To France</option>
											</select>
                                       </div>
										 </div>	
                                       <center><button type="submit" name="submit" class="btn btn-success">Booking Now</button></center> 
                                    </form>
                                </div>
                            </div>
                            <!-- help center -->
                            <div class="sidber-box help-widget">
                                <i class="flaticon-photographer-with-cap-and-glasses"></i>
                                <h4>Need <span>Help?</span></h4>
                                <a href="#" class="phone">0300-7995784</a>
                                <small>Monday to Friday 9.00am - 7.30pm</small>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                    <!-- related tours -->
                    
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
        <?php include("config/footer.php"); ?>
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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyCQ4twFS87Ji-69gchik7Vak4lEsxOCA6M"></script>
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 10, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka

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
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
				
		<script>
function myFunction() {
  var x = document.getElementById("amount").value;
  var y = document.getElementById("paid").value;
   
  var ramaning =y*x;
  //alert (ramaning);

   document.getElementById('price').value=ramaning;
}
</script>
   <script>function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8);
};</script>
<script>function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}</script>
    </body>

</html>