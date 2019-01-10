<?php
require_once '../assets/Twilio/autoload.php';
use Twilio\Rest\Client;
require('config.php');
date_default_timezone_set("America/New_York");
$hour = date('G');
//echo("Hour:$hour<br>");
$query = "SELECT * FROM users";
$users = mysqli_query($conn,$query);
	// Loop through users
	while ($data = mysqli_fetch_assoc($users)){
		// Get user data
		$phone = $data["phone"];
		$fireTime = $data["fireTime"];
		$endDate = $data["endDate"];
		// Find message to send
		$quotes = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1;";
		$results = mysqli_query($conn,$quotes);
		$datas = mysqli_fetch_assoc($results);
		$quote = $datas['quote'];
		// Check if user is active and hour is 8AM in their timezone
		if (time() < $endDate && $hour == $fireTime) {
			// Execute sending the text message
			$client = new Client($twilioaccount_sid, $twilioauth_token);
			$messages = $client->messages->create("$phone", array(
				'From' => "+19789654346",
				'Body' => "$quote",
			));	
			sleep(4);
		}	
	}
?>