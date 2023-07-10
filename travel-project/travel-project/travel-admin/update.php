<?php 
include("includes/db.php");


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
	$qrun=mysqli_query($conn,$qry);
	header("location:package-all.php");
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

    <!--== BODY CONTNAINER ==--><div class="container-fluid sb2">
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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add New Package</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Package</h4>
                            <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                        </div>
                        <div class="bor">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="tit">
                                        <label for="list-title">Title</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="file-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="img">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload Blog Banner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="pri">
                                        <label for="list-title">Price</label>
										 
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="coun1">
                                        <label for="list-title">Country</label>
										 
                                    </div>
								<div align="center" class="row">
                                     <span>To</span>	 
                                    </div>
										
                                   
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="coun2">
                                        <label for="list-title">Country</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="date" class="validate" name="dat">
                                       
                                    </div>
                                </div>
								 <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="time" class="validate" name="tim">
                                        
                                    </div>
									
                                </div>
								
								 <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="desc">
                                        <label for="list-title">Description</label>
                                    </div>
                                </div>
								<div align="center">
								<input type="submit" name="submit" value="submit">
									</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/package-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Apr 2019 07:57:19 GMT -->
</html>