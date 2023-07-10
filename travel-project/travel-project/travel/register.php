 <?php
include("config/connection.php");
 session_start();
//ob_start();
?>

    
<?php include("config/head.php"); ?>

    <body>
        
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
                                    <h1>REGISTER</h1>
                                   

                                    <div class="ui breadcrumb">
                                        <a href="index-2.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Register</div>
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
								<?php
	if(isset($_POST['submit']))
{
	    $_first = mysqli_real_escape_string( $conn,$_POST['f_name']);
        $_second = mysqli_real_escape_string($conn,$_POST['l_name']);
        $img = mysqli_real_escape_string($conn,$_FILES['img']['name']);
        $_email = mysqli_real_escape_string($conn,$_POST['email']);
        $_phone = mysqli_real_escape_string( $conn,$_POST['phone']);
        $_password = mysqli_real_escape_string($conn,$_POST['password']);
        $_cpassword = mysqli_real_escape_string($conn,$_POST['c_password']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
	
	$folder="image/";
	$path=$folder.$img;
	move_uploaded_file($_FILES['img']['tmp_name'], $path);

	  $search_query = "SELECT * FROM `register` WHERE email='$_email'";
      $run_query = mysqli_query($conn,$search_query);
      $search_row=mysqli_fetch_array($run_query);


 
      if(@$search_row['email']==$_email)
      {

         ?>
<div class="alert alert-danger" role="alert">
   Email already exists.
</div>

<?php
   }
   elseif(!$search_row=mysqli_fetch_array($run_query)&&($_password == $_cpassword))
	{
	    $qry= "INSERT INTO `register`(`f_name`, `l_name`, `image`, `email`, `phone`, `password`, `c_password`, `gender`) 
	    VALUES ('$_first','$_second','$img','$_email','$_phone','$_password','$_cpassword','$gender')";
		$qrun=mysqli_query($conn,$qry);
		
		
        if($qrun)
        {
        
       echo "User Has been Registered Succeessfully.";
              
       }		
	else{
		 echo mysqli_error($conn);
	} //else
   } //elseif
   } // main iff isset
?>
                                   <form method="post" enctype="multipart/form-data">
                                    <h2>Register</h2>
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" required placeholder="Enter your First Name" maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" id="l_name" required name="l_name" placeholder="Enter Your Last Name"  maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
                                            </div>
                                        </div>
										<div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="File" class="form-control" id="File" name="img">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" required name="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone Number" onkeypress='validate(event)'  maxlength="11">
                                            </div>
                                        </div>
                                           <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" id="password" required name="password" placeholder=" Enter Password" maxlength="13">
                               </div>
                                        </div>
                                           <div class="col-sm-12 col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                   <?php if(isset($_GET['error']) == "cpassword"){ ?>
                              <div><span style="color:red">Invalid conform Password:</span></div>
                              <?php } ?>
                                                <input type="password" class="form-control" id="c_password" required name="c_password" placeholder="Enter Conform password" maxlength="13">
                                                                   
                                         
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
												<label>Gender</label><br>
                                                <input type="radio" class="" value="male" id="gender" name="gender"> Male &nbsp;&nbsp;
                                                <input type="radio" class="" value="female" id="gender" name="gender"> Female
                                            </div>
                                        </div>
                                        
                                    </div>
                                 
                                    <button class="thm-btn" name="submit" type="submit" value="submit">Submit</button>
                                </form>
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
                            <h2> Discover the best offers!</h2>
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

                // Get the php DOM element that will contain your map 
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

</php>