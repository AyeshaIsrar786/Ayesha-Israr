<?php 

include_once("includes/db.php");

session_start();
session_destroy();

header("location:./login.php");

?>