<?php
include_once("includes/db.php");

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
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New User</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="tab-inn">
    <?php
    if(isset($_POST['submit']))
{
        $_first = mysqli_real_escape_string( $conn,$_POST['f_name']);
        $_second = mysqli_real_escape_string($conn,$_POST['l_name']);
        $img = mysqli_real_escape_string($conn,$_FILES['file']['name']);
        $_email = mysqli_real_escape_string($conn,$_POST['email']);
        $_phone = mysqli_real_escape_string( $conn,$_POST['phone']);
        $_password = mysqli_real_escape_string($conn,$_POST['password']);
        $_cpassword = mysqli_real_escape_string($conn,$_POST['c_password']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        
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
        if($run_query){
        $exe = explode(".", $img);
        $e = strtolower($exe[1]);
        $arr = ["png","jpg","jpeg"];
        if(in_array($e,$arr)){
       
        $qry= "INSERT INTO `register`(`f_name`, `l_name`, `image`, `email`, `phone`, `password`, `c_password`, `gender`) 
        VALUES ('$_first','$_second','$img','$_email','$_phone','$_password','$_cpassword','$gender')";
        $qrun=mysqli_query($conn,$qry);

        } //if(in_array)

        if($qrun)
        {
        move_uploaded_file($_FILES['file']['tmp_name'], "./image/" .$img);  
        echo "User Has been Registered Succeessfully.";
              
       }  //if(qrun)      
   } //if($run_query)
   } //elseif
   } // main iff isset
?>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" class="form-control" id="f_name" name="f_name" required placeholder="Enter your First Name" maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="form-control" id="l_name" required name="l_name" placeholder="Enter Your Last Name"  maxlength="13"
    title="Only Letters"
   
    onkeydown="return alphaOnly(event);"
    onblur="if (this.value == '') {this.value = 'Type Letters Only';}"
    onfocus="if (this.value == 'Type Letters Only') {this.value = '';}"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="file" id="file" name="file">
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="email" id="email" required name="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                 <input type="text" id="phone" name="phone" required placeholder="Phone Number" onkeypress='validate(event)'  maxlength="11">
                                            </div>
                                            <div class="input-field col s6">
                                                 <input type="password" id="password" required name="password" placeholder=" Enter Password" maxlength="13">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <?php if(isset($_GET['error']) == "cpassword"){ ?>
                              <div><span style="color:red">Invalid conform Password:</span></div>
                              <?php } ?>
                                                <input type="password" id="c_password" required name="c_password" placeholder="Enter Conform password" maxlength="13">
                                                   
                                            </div>
                                            <div class="input-field col s6">
                                            <select name="gender">
                                                <option type="radio" class="" value="male" id="gender" name="gender">Male</option> 
                                                <option type="radio" class="" value="female" id="gender" name="gender">Female</option> </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="thm-btn" name="submit" type="submit" value="submit">Submit</button>
                                            </div>
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
</body>


</html>