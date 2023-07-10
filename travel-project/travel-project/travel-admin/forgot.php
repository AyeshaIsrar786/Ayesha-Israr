<?php

include_once('includes/db.php');

?>
<!DOCTYPE html>
<html lang="en">


<?php include("includes/head.php"); ?>


<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form method="post">
                                  <h2>Forgot Password.</h2>
                                   <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                       <div class="form-group">
                                          <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Your Email">
                                        </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-12">
                                          <div class="form-group">
                                        <input type="password" class="form-control" id="re-password" name="newpass"  required placeholder="Enter Your New-Password">
                                            </div>
                                        </div>
                                       <div class="col-sm-6 col-lg-12">
                                          <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="repass"  required placeholder="Enter Your Rep-Password">
                                            </div>
                                        </div>
                                      
                                    </div>
                                  <button class="thm-btn" type="submit" name="submit" value="submit">Submit</a>
                                </form>
        </div>
    </div>
    <?php
                           $userid=@$_SESSION['id'];
                            if(isset($_POST['submit']))
                            {
                                $email=$_POST['email'];
                                $newpass=$_POST['newpass'];
                                $repass=$_POST['repass'];
                                
                                $qry="SELECT * FROM register WHERE email='$email'";
                                $exe_qry = mysqli_query($conn,$qry);
                                $data=mysqli_fetch_array($exe_qry);
                                
                                if($data['email']==$email){
                                    if($newpass==$repass){
                                        
                        $qry=" UPDATE register SET password='$newpass' WHERE email='$email'";
                            $exe_qry = mysqli_query($conn,$qry);
                            echo"<script>alert('Change Password Successfully');window.location='forgot.php'</script>";
                                }else{
                            echo"<script>alert('Your New Password Does Not Match The Password Confirmation');window.location='forgot.php'</script>";    
                                    }
                                    }
                                 else{
                           echo"<script>alert('Your Old Password is Incorect');window.location='forgot.php'</script>";
                                    }
                                
                            }
                            
                            ?>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>