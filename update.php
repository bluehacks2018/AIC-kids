<?php
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'juanjob');
	session_start();
	$id = $_SESSION['id'];
	if (!$conn){
		echo 'not connected';
	}

	$first_name = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$contact = $_GET['contact'];
	$street = $_GET['street'];
	$brgy = $_GET['barangay'];
	$city = $_GET['city'];

	$query = "UPDATE provider SET `first_name`='$first_name', last_name='$last_name', `contact`='$contact', `street`='$street', `brgy`='$barangay', `city`='$city'" WHERE '$id';
	mysqli_query($conn, $query);
?>