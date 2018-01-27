<?php 
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'juanjob');

	if (!$conn){
		echo 'not connected';
	}

	$last_name = $_POST["last_name"];
	$first_name = $_POST["first_name"];
	$contact = $_POST["contact"];
	$street = $_POST["street"];
	$brgy = $_POST["barangay"];
	$city = $_POST["city"];

	$query = "INSERT INTO `provider`(`first_name`, `last_name`, `street`, `brgy`, `city`, `contact`) VALUES ('$first_name', '$last_name', '$street', '$brgy', '$city', '$contact')";

	if (!mysqli_query($conn, $query))
		echo "Not connected";

	header('Location: index.php');
?>