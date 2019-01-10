<?php
$stripePublic = '';
$stripePrivate = '';
$twilioaccount_sid = '';
$twilioauth_token = '';
$servername = 'localhost';
$db_name = '';
$db_user = '';
$db_pass = '';
// Create connection
$conn = new mysqli($servername, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
