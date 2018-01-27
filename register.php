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

	$st = "sssds";

	$query = "INSERT INTO test (`col1`) VALUES ('$st')";

	$query2 = "SELECT * FROM provider where first_name = 'aa'";

	if (!mysqli_query($conn, $query))
		echo "Not connected";
	else
		echo "success"

?>