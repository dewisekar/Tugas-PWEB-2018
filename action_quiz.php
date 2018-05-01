<?php
	include 'dbconnect.php';
	include 'action_login.php';
	$query = "Select * from questions";

	$result = mysqli_query($con,$query);
	
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$jumlah = mysqli_num_rows($result)

?>