<?php 
include("includes/db.php");
?>
<?php 
session_start();
 if(!$_SESSION['id']){
   header("location:login.php");
 }
?>
<?php
if(isset($_POST['submit'])){
$id=$_GET['id'];	
$tit=$_POST['tit'];
   $folder="image/";
	$img=$_FILES['img']['name'];
	$path=$folder.$img;
	move_uploaded_file($_FILES['img']['tmp_name'],$path);
$pri=$_POST['pri'];
$coun1=$_POST['coun1'];
$coun2=$_POST['coun2'];
$dat=$_POST['dat'];
$tim=$_POST['tim'];
$desc=$_POST['desc'];
	
	$qry="UPDATE package_add SET title='$tit',image='$img',price='$pri',country1='$coun1',country2='$coun2',date='$dat',time='$tim',description='$desc' WHERE id='$id'";
	$exe_qry = mysqli_query($conn,$qry);
	
	header("location:package-all.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<?php include("includes/head.php"); ?>

<body>
    
    <!--== MAIN CONTRAINER ==-->
        <?php include("includes/header.php"); ?>
    

    <!--== BODY CONTNAINER ==-->
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
                                                    <th>User Name</th>
                                                  
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Password</th>
                                                    <th>confirm-password</th>
                                                    <th>gender</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
												<?php 
												$qry="SELECT * FROM register";
												$exe_qry = mysqli_query($conn,$qry);
												while($data= mysqli_fetch_array($exe_qry)){
												?>
                                                <tr>
													<td><?php echo $data['id'] ?></td>
                                                    <td><span class="list-img"><img src="../travel/image/<?php echo $data['image'] ?>" alt=""></span>
														<?php echo $data['f_name'] ?>
														<?php echo $data['l_name'] ?>
                                                    </td>
                                                   
                                                    </td>
                                                    <td><?php echo $data['email'] ?></td>
                                                    <td><?php echo $data['phone'] ?></td>
                                                    <td><?php echo $data['password'] ?></td>
                                                    <td>
                                                       <?php echo $data['c_password'] ?>
                                                    </td>
                                                    <td>
                                                       <?php echo $data['gender'] ?>
                                                    </td>
                                                    
                                                    <td>
                                                        <a href="delete_register.php?id=<?php echo $data['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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