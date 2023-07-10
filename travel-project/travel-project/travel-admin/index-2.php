<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
 if(!$_SESSION['id']){
   header("location:login.php");
 }
?>
<?php include("includes/head.php"); ?>


<body>
        <?php include("includes/header.php"); ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
               <?php include_once("includes/leftpanel.php") ?>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index-2.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
					<div class="ad-v2-hom-info-inn">
						<ul>
							<li>
								<div class="ad-hom-box ad-hom-box-1">
									<span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Today Views</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-2">
									<span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Earnings</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-3">
									<span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Users</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ad-hom-box ad-hom-box-4">
									<span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Enquiry</p>
									<h3>22,520</h3>
									</div>
								</div>
							</li>
						</ul>
					</div>
                </div>

                                <div class="tab-inn">
                                    <div class="table-responsive table-desi tab-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005" allowfullscreen></iframe>
                                    </div>
                                </div>
                           

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>