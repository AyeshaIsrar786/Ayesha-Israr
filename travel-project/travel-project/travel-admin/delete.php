<?php 
include('includes/db.php');

$del=$_GET['id'];
$qry="DELETE FROM package_add WHERE id='$del'";
$exe_qry = mysqli_query($conn,$qry);

header("location:package-all.php");
?>