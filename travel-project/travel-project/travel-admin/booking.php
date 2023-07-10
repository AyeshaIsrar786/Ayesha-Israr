<?php 
include("includes/db.php");
 
?>
<?php 
session_start();
 if(!$_SESSION['id']){
   header("location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">


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

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="user-all.php">User Register</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
											<h4>Register User Detail</h4>
											<br>
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Set Seat Price</th>
                                                    <th>Total Price</th>
                                                    <th>Phone</th>
                                                    <th>Seats</th>
                                                    <th>Services</th>
                                                    <th>Country</th>
                                                     <th>User id</th>
												
                                                </tr>
                                            </thead>
                                            <tbody>
													 <?php
								 $qry="SELECT * FROM booking";
								 $exe_qry = mysqli_query($conn,$qry);
								while($data= mysqli_fetch_array($exe_qry)){
								 ?>
								<tr>
									<td><?php echo $data['id']; ?></td>
									<td><?php echo $data['name']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td><?php echo $data['set_seat_price']; ?></td>
									<td><?php echo $data['total_price']; ?></td>
									<td><?php echo $data['phone']; ?></td>
									<td><?php echo $data['seats']; ?></td>
									<td><?php echo $data['services']; ?></td>
									<td><?php echo $data['country']; ?></td>
									<td><?php echo $data['user_id']; ?></td>
									
								</tr>
									<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Apr 2019 07:57:19 GMT -->
</html>