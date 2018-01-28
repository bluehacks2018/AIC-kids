<?php 
require_once dirname(dirname(__FILE__)) . '/htdocs/telerivet.php';
if(!empty($_GET["value"])){
	
	$value = $_GET["value"];
	$tok = strtok($value, "/");
	
	$job_title = $tok;
	$tok = strtok("/");
	
	$location = $tok;
	$tok = strtok("/");
	
	$contact= $tok;
	
	$conn = mysqli_connect("localhost", "root", "", "juanjob");
	
	$job_id = "SELECT * FROM `job` Where `job_title` = '$job_title'";
	$result = mysqli_query($conn, $job_id);
	$row = mysqli_fetch_assoc($result);
	
	$job_id = $row['job_id'];
	
	$sql = "INSERT INTO `job_request` (`job_id`, `location`, `done`) VALUES ('$job_id', '$location','0')";
	$result = mysqli_query($conn, $sql);
	$request_id = $conn->insert_id;
	
	
		$api_key = "cs0KtIkAgY9tayoVqLhRNgX4K68bcVjD";
		$project_id = "PJ1d0c187f4b652026";
		$api = new Telerivet_API($api_key);
		$project = $api->initProjectById($project_id);
		
		$sql = "SELECT `job_id` FROM `job` Where `job_title` = '$job_title'";

		$result = mysqli_query($conn, $sql);
	
		$row = mysqli_fetch_assoc($result);
		$j = $row['job_id'];
	
		$sql = "INSERT INTO `job_request` (`job_id`, `location`, `done`) VALUES ('$j', '$location','0')";
		$result = mysqli_query($conn, $sql);
		
        $sql = "SELECT p.contact 
				FROM provider p JOIN job_provider jp ON p.provider_id = jp.provider_id
				WHERE jp.job_id = $j AND p.city = '$location'";
        $result = mysqli_query($conn, $sql);
        if (!$result)
			echo "sql failed";
        
		$content = "someone needs a $job_title in $location";
		while($row = mysqli_fetch_assoc($result)){
			$to_number = $row['contact'];
				//$to_number = "09054976467";
				$contact = $project->sendMessage(array(
				'to_number' => $to_number,
				'content' => $content
				));
			}
        

	
	
	
	
	}
else{
	// send a message that signifies 
	}




?>
