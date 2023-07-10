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
$tit=$_POST['tit'];
   $folder="image/";
	$img=$_FILES['img']['name'];
	$path=$folder.$img;
	move_uploaded_file($_FILES['img']['tmp_name'],$path);
$pri=$_POST['pri'];
$coun1= $_POST['coun1'];
$coun2= $_POST['coun2'];
$dat= $_POST['dat'];
$tim= $_POST['tim'];
$desc= $_POST['desc'];
	
if($pri >=50000){
	
	if($coun1 != $coun2 )
    {
	$qry = "insert into package_add(title,image,price,country1,country2,date,time,description) values('$tit','$img','$pri','$coun1','$coun2','$dat','$tim','$desc')";
	$exe_qry = mysqli_query($conn,$qry);
	}
    else{
		  header("location:package-add.php?error=country1");		  
}

}else{
	header("location:package-add.php?error1=price");
	}
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
                        <li class="active-bre"><a href="package-add.php"> Add New Package</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add New Package</h4>
                           </div>
                        <div class="bor">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="tit" maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
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
                                        <input id="list-title" type="text" class="validate" name="pri" onkeypress='validate(event)'  maxlength="11">
                                         <?php if(isset($_GET['error1']) == "price") { ?>
                             <div><span style="color: red">We Cannot Use Less Than 50000 Name</span></div>
<?php }  ?>
                                        <label for="list-title">Price</label>
								    </div>
                                </div>
                                <div class="row">
                                     <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="coun1">
                                          <?php if(isset($_GET['error']) == "country1") { ?>
                             <div><span style="color: red">We Cannot Use Same Country Name</span></div>
<?php }  ?>
                                        <label for="list-title">Country</label>
										 
                                    </div>
								<div align="center">
                                     <span>To</span>	 
                                    </div>
										
                                   
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="list-title" type="text" class="validate" name="coun2">
                                         <?php if(isset($_GET['error']) == "country2") { ?>
                             <div><span style="color: red">We Cannot Use Same Country Name</span></div>
<?php }  ?>
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
                                        <input id="list-title" type="text" class="validate" name="tim" placeholder="Time">
                                        
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

    <!--======== SCRIPT FILES =========-->
  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
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