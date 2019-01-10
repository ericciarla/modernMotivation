<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require('inc/config.php');
require('inc/randString.php');
require_once('assets/stripe/init.php');
\Stripe\Stripe::setApiKey($stripePrivate);
// Process info
$timezone = mysqli_real_escape_string($conn,$_POST['timezone']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$phone = (int)preg_replace('#[^0-9]+#', '', $phone);
$phone = "+1".$phone;
// Store in session for later processing
$_SESSION['phone'] = $phone;
$_SESSION['time'] = $timezone + 8;
/*

*/

?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

<link rel="icon" 
      type="image/ico" 
      href="favicon.ico" />
        <title>Modern Motivation - Daily quotes sent to your phone</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/theme.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,700,900,500' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.7/typicons.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/pushy.css">
        <link rel="stylesheet" href="assets/css/masonry.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer-theme-default.css">

    </head>
    <body class="">
      <!-- Pushy Menu -->
     

      <!-- Site Overlay -->
      <div class="site-overlay"></div>

        <header id="home">
            <div class="container-fluid">
                <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
                <div class="container">
                    <center><img src="images/sun.png">
                    <div style="background-color:#ededed;border-radius:10px;margin-top:20px;width:40%;color:black;" class="jumbotron">
                        
                        <span style="font-size:25px;">Get ready to be motivated!</span><br>
                        This is going to be one productive month :)<br>
                        <strong><span id="total">$2.99</span></strong><br>
                        <div style="margin-top:10px;">
                        <form action="inc/payprocess.php" method="POST">
                        <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?php echo $stripePublic; ?>"
                        data-name="Text motivation"
                        data-description="Payment for 1 month"
                        data-amount="299"
                        data-zip-code="true"
                        data-allow-remember-me="false"    
                        data-label="Pay Now!">
                        </script>
                    </form>
                    </div>
                    </div>
                    </center>
                </div>
            </div>
        </header>
      
       
       
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
        <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/jquery.mask.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap-scrollspy.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
        <script src="assets/js/masonry.js"></script>
        <script src="assets/js/pushy.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/odometer.js"></script>
        
    </body>
</html>


