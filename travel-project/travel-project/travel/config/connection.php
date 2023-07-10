<?php
	$conn = mysqli_connect('localhost','root','','travel');
	
	if($conn)
	{
	//echo "Data base Connection has been Successfully Established";
	}
	else
	{
		mysqli_error($conn);
	}
?>