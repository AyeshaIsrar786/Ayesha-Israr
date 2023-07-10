<?php

include_once('includes/db.php');
session_start();
?>
<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="SELECT * FROM admin WHERE email='$email' and password='$password'";
    $exe_qry = mysqli_query($conn,$qry);
    $result=mysqli_fetch_array($exe_qry);
        if($email == $result['email'] && $password == $result['password'])
        {
        $_SESSION['id'] = $result['id'];
          header("location:index-2.php");
         }
        else
        {
        header("location:login.php?error=password");
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<?php include("includes/head.php"); ?>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
                  <form method="post">
                    <img src="images/logo.png" alt="" />
                                  <h2>Login</h2>
                                   <div class="row">
                                    <div class="col-sm-6 col-lg-12">
                                       <div class="form-group">
                                          <input type="email" class="form-control" id="email" name="email" required placeholder="Enter Your Email">
                                        </div>
                                        </div>
                                         <div class="col-sm-6 col-lg-12">
                                            <div class="form-group">
                               <?php if(isset($_GET['error']) == "password"){ ?>
                              <div><span style="color:red">Invalid Password:</span></div>
                              <?php } ?>
                                     <input type="password" class="form-control" id="password" required name="password" placeholder="Enter Your password">
                                            </div>
                                        </div>
                                       <div class="col-sm-6 col-lg-12">
                                       <div align="right" class="form-group">
                                        <a href="forgot.php">Forgot Password?</a>
                                        </div>
                                        </div>
           
                                    </div>
                                  <button class="thm-btn" type="login" name="login" value="login">Login</a>
                                </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>