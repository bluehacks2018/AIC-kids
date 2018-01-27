<?php
	session_start();
	$conn = mysqli_connect('127.0.0.1', 'root', '', 'juanjob');

	if (!$conn){
		echo 'not connected';
	}

	$contact = $_POST["contact"];
	$pass = $_POST["password"];
	$query = "SELECT * FROM provider where contact = '$contact' and md5('$pass') = password";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	if ($row['provider_id'] > 0){
		$_SESSION['id'] = $row['provider_id'] ;
		header('Location: dashboard.php');
	} else{
		header('Location: index.php');
	}
?>