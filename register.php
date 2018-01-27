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
	$pass = $_POST["password"];

	$conf = $_POST["password_confirm"];

	if ($conf != $pass){
		header('Location: registration.php');
		echo "Passwords don't match";	
	}
	else {
		$query = "INSERT INTO `provider`(`first_name`, `last_name`, `street`, `brgy`, `city`, `contact`, `password`) VALUES ('$first_name', '$last_name', '$street', '$brgy', '$city', '$contact', md5('$pass'))";
		if (mysqli_query($conn, $query))
			header('Location: index.php');
		else
			header('Location: registration.php');

	}


?>