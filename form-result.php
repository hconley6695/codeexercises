<?php 
	
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$animal = $_POST["animal"];
	$color = $_POST["color"];


	echo "My name is " . $name . "<br/>";
	echo "My email address is " . $email . "<br/>";
	echo "My phone number is " . $phone . "<br/>";
	echo "My favorite animal is a " . $animal . "<br/>";
	// echo "<pre>";
	// print_r($animal);
	// echo "</pre>";
 ?>