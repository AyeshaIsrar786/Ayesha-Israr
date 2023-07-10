<?php 
include('includes/db.php');

$del=$_GET['id'];
$qry="DELETE FROM register WHERE id='$del'";
$exe_qry = mysqli_query($conn,$qry);

header("location:user-all.php");
?>