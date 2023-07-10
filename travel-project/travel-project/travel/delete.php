<?php 
include_once("config/connection.php");

 $del=$_GET['id'];

 $qry="DELETE FROM booking WHERE id='$del'";
 $exe_qry = mysqli_query($conn,$qry);

 header("location:booking.php");
?>