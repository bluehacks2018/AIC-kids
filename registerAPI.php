<?php 

	$conn = mysqli_connect("127.0.0.1", "root", "", "juanjob");
if(!empty($_GET["value"])){
	$value = $_GET["value"];
	$tok = strtok($value, "/");
	
	$first_name = $tok;
	$tok = strtok("/");
	
	$last_name = $tok;
	$tok = strtok("/");
	
	$street= $tok;
	$tok = strtok("/");
	
	$brgy = $tok;
	$tok = strtok("/");
	
	$city = $tok;
	$tok = strtok("/");
	
	$service = $tok;
	$tok = strtok("/");
	
	$contact = $tok;
	
	$sql = "INSERT INTO `provider` (`first_name`, `last_name`, `street`,`brgy`, `city`, `contact`)
VALUES ('$first_name', '$last_name', '$street', '$brgy', '$city', '$contact')";

	if (!mysqli_query($conn, $sql))
		echo "not inserted one";
	else
		echo "inserred";
		
	$provider_id = $conn->insert_id;
	
	$sql = "INSERT INTO `job` (`job_title`) VALUES ('$service')";
	
	mysqli_query($conn, $sql);
	$job_id = $conn->insert_id;
	echo $job_id;
	echo $provider_id;
	
	$sql = "INSERT INTO `job_provider` (`job_id`, `provider_id`) VALUES ('$job_id', '$provider_id')";
	mysqli_query($conn, $sql);
	echo $first_name . " " . $last_name. " ". $service;
	
	}
else{
	// send a message that signifies 
	}




?>
