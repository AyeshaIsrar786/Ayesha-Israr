<?php 
include("config/connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    
<?php include_once("config/head.php"); ?>
    <body>
       
        <div id="page-content">
            <!-- navber -->
            <?php include_once("config/header.php"); ?> 
            <!-- /.nav end -->
            <div class="slider-wrapper">
                <div class="responisve-container">
                    <div class="slider">
                        <div class="fs_loader"></div>
                        <div class="slide">
                            <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">Welcome to </p>
                            <p class="slider-titele" data-position="210,200" data-in="left"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                            <p class="slider-text" data-position="270,100" data-in="bottom" data-out="right" data-step="2" data-delay="1000">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took  
                            </p>
                            <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
                        </div>
                        <div class="slide">
                            <p class="uc" data-position="150,360" data-in="top" data-step="1" data-out="top">Welcome to </p>
                            <p class="slider-titele" data-position="210,200" data-in="bottom"  data-step="2" data-delay="100">Bdtask Travel Agency</p>
                            <p class="slider-text" data-position="270,100" data-in="bottom" data-out="right" data-step="2" data-delay="1000">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been<br>
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took  
                            </p>
                            <a href="#" class="thm-btn" data-position="370,435" data-in="bottom" data-out="right" data-step="2" data-delay="1500">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- booking -->
            
            <!-- booking -->
            
            <!-- popular tour -->

            <section class="popular-inner">
                <div class="container">
                    <div class="row">
						
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Tours</h2>
                                <p>Most Popular Tours in the World</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="popular-slide" class="owl-carousel">
								<?php 
						$qry="SELECT * FROM package_add";
						$exe_qry = mysqli_query($conn,$qry);
                        while($data=mysqli_fetch_array($exe_qry))
                        {
						
						?>
                            <div class="item">
								<div class="grid-item-inner">
                                    <div class="grid-img-thumb">
                                         ribbon 
                                        <div class="ribbon"><span>Popular</span></div>
                                        <a href="#">
											
											<img style="height: 200px; width: 200px" src="../travel-admin/image/<?php echo $data['image'] ?>" alt="1" class="img-responsive" />
												
										</a>
                                    </div>
                                    <div class="grid-content">
                                        <div class="grid-price text-right">
                                            Only <span><sub>$</sub><?php echo $data['price'] ?></span>
                                        </div>
                                        <div class="grid-text">
                                            <div class="place-name"><?php echo $data['country1'] ?></div>
                                            <div class="travel-times">
                                                <h4 class="pull-left"><?php echo $data['country2'] ?></h4>
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
                            </div>
							<?php } ?>
                         </div>
						
                    </div>
                </div>
            </section>

            <!-- service -->
         <!--  <section class="service-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Our Service</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                                    <div class="content-text">
                                        <h5>Diverse Destination</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-map"></span></div>
                                    <div class="content-text">
                                        <h5>Fast Booking</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-lemonade"></span></div>
                                    <div class="content-text">
                                        <h5>Drinks Included</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box">
                                <article>
                                    <div class="icon"><span class="flaticon-party"></span></div>
                                    <div class="content-text">
                                        <h5>After Partys</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                         ik        </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
              <!-- destination -->
            <section class="destination" id="packages">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Packages</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
						<?php 
						$qry="SELECT * FROM package_add";
						$exe_qry = mysqli_query($conn,$qry);
						while($data=mysqli_fetch_array($exe_qry))
                        {
						
						?>
                        <div class="col-md-3 col-sm-4 thm-padding">
                            <div class="destination-grid">
								
                                <a href="#"><img style="height: 200px; width: 400px" src="../travel-admin/image/<?php echo $data['image']; ?>" class="img-responsive" alt=""></a>
                                <div class="mask">
                                    <h2><?php echo $data['title']; ?></h2>
                                    <p><?php echo $data['date']; ?></p>
                                    <a href="tour_details.php?id=<?php echo $data['id']; ?>" class="thm-btn">Read More</a>
                                </div>
                                <div class="dest-name">
                                    <h5><?php echo $data['country1']; ?></h5>
                                    <h4><?php echo $data['country2']; ?></h4>
                                </div>
                                <div class="dest-icon">
                                    <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                    <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                    <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                    <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                </div>
								
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
            </section>
            <!-- hotel -->
            
            <!-- Testimonial section -->
            <div class="reference home-ref">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>References</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="testimonials">
                            <div class="carousel" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner">
                                    <!-- Quote 1 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Ahram Tours & Traveling Agency
                                            <span class="author">- Ayesha Israr</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->  
                                    <div class="item col-sm-10 col-sm-offset-1">
                                        <blockquote>
                                            Ahram Tours & Traveling Agency 
                                            <span class="author">- Wajeeha Javed</span>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item col-sm-10 col-sm-offset-1 active">
                                        <blockquote>
                                           Ahram Tours & Traveling Agency 
                                            <span class="author">- Kainat Anwar</span>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="assets/images/avtar-3.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="assets/images/avtar-3.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="assets/images/avtar-3.jpg" alt=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- package section -->
          
            <!-- Counter -->
           
            <!-- blog section -->
    
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
        <?php include_once("config/footer.php"); ?>
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
    </body>

</html>