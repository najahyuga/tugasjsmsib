<?php
require_once "config.php";
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$datetime = $_POST['datetime'];
	$data=mysqli_query($host,"INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created_at`) 
	VALUES ('', '$first_name', '$last_name', '$email', '$phone', '$address', '$datetime')");

	
header("location: index.php " ); 
?>