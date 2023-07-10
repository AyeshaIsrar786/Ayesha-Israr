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
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <?php include("includes/header.php"); ?>
    </div>
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
                        <li class="active-bre"><a href="#">All-Package</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>All package</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                    

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Price</th>
                                                    <th>Country1</th>
                                                    <th>Country2</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Description</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												
												<?php 
												$qry="SELECT * FROM package_add";
												$exe_qry = mysqli_query($conn,$qry);
												while($data= mysqli_fetch_array($exe_qry)){
												?>
                                                <tr>
                                                  <td><?php echo $data['id']; ?></td>
                                                  <td><?php echo $data['title']; ?></td>
												<td><img src="image/<?php echo $data['image']; ?>" width="50" height="50"></td>
												<td><?php echo $data['price']; ?></td>
												<td><?php echo $data['country1']; ?></td>	
                                                <td><?php echo $data['country2']; ?></td>
                                                <td><?php echo $data['date']; ?></td>
                                                <td><?php echo $data['time']; ?></td>
                                                <td><?php echo $data['description']; ?></td>
                                          <td>
                                          <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                          </td>
                                          <td>
                                          <a href="update.php?id=<?php echo $data['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                          </td>
                                          <td>
                                          <a href="delete.php?id=<?php echo $data['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                          </td>
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


</html>