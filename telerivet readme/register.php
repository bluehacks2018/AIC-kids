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
	$job_id = $_POST["job"];

	$conf = $_POST["password_confirm"];

	if ($conf != $pass){
		header('Location: registration.php');
		echo "Passwords don't match";	
	}
	else {
		$query = "INSERT INTO `provider`(`first_name`, `last_name`, `street`, `brgy`, `city`, `contact`, `password`) VALUES ('$first_name', '$last_name', '$street', '$brgy', '$city', '$contact', md5('$pass'))";
		if (mysqli_query($conn, $query)){
			$last_insert = mysqli_insert_id($conn);
			$job_query = "INSERT INTO `job_provider`(`job_id`, `provider_id`) VALUES ('$job_id', '$last_insert')";
			echo $job_query;
			// mysqli_query($conn, $job_query);
			if(mysqli_query($conn, $job_query)){
				header('Location: index.php');
			}
			else {
				header('Location: lorem.php');
			}
			
		}		
		else
			header('Location: registration.php');

	}


?>