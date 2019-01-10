<?php 
require('inc/config.php'); 
if (isset($_GET['text'])) {
	$url = $_GET['url'];
	$text = $_GET['text'];
	header( "refresh:3;url=$url" );
} 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Redirecting....</title>
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<style type="text/css">

</style>


<body style="background-color:white;font-family: 'Lato', sans-serif; color:black; font-size: 20px;">
<center>
	<div>
		<br><br><br><br><br><br><br><br>
  	<span style="font-size:40px;"><?php echo $text; ?><br>Redirecting...</span>
	</div>
</center>
</body>
</html>