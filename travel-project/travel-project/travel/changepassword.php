<?php
ob_start();
session_start();
include_once("config/connection.php");
if(empty($_SESSION['id'])){
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include("config/head.php"); ?>
    <body>
        <!-- page loader -->
        <div id="page-content">
            <!-- navber -->
         <?php include("config/header.php"); ?>    
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>CHANGE PASSWORD</h1>
                                    
                                  

                                    <div class="ui breadcrumb">
                                        <a href="index-2.html" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Change-Password</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                       <div class="col-sm-8">
                            <div class="contact-form">
                                <form method="post">
                                  <h2>Change Password.</h2>
                                   <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                       <div class="form-group">
                                         <label>Old Password</label>
                                          <input type="password" class="form-control" id="password" name="oldpass" required placeholder="Enter Your Old-Password">
                                        </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-12">
                                          <div class="form-group">
                                            <label>New Password</label>
                                        <input type="password" class="form-control" id="re-password" required name="newpass" placeholder="Enter Your New-Password">
                                            </div>
                                        </div>
									   <div class="col-sm-6 col-lg-12">
                                          <div class="form-group">
                                            <label>Repeat Password</label>
                                        <input type="password" class="form-control" id="password" required name="repass" placeholder="Enter Your Rep-Password">
                                            </div>
                                        </div>
									  
                                    </div>
                                  <button class="thm-btn" type="submit" name="submit" value="submit">Submit</a>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
				
				<?php
	                        $userid=$_SESSION['id'];
							if(isset($_POST['submit']))
							{
								$oldpass=$_POST['oldpass'];
								$newpass=$_POST['newpass'];
								$repass=$_POST['repass'];
								
								$qry="SELECT * FROM register WHERE id='$userid'";
								$exe_qry = mysqli_query($conn,$qry);
								$data=mysqli_fetch_array($exe_qry);
								
								if($data['password']==$oldpass){
									if($newpass==$repass){
										
					    $qry2=" UPDATE register SET password='$newpass' WHERE id='$userid'";
							$exe_qry = mysqli_query($conn,$qry2);
							echo"<script>alert('Change Password Successfully');window.location='changepassword.php'</script>";
								}else{
							echo"<script>alert('Your New Password Does Not Match The Password Confirmation');window.location='changepassword.php'</script>";	
									}
									}
							     else{
						   echo"<script>alert('Your Old Password is Incorect');window.location='changepassword.php'</script>";
									}
								
							}
							
							?>
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
    </body>

</html>