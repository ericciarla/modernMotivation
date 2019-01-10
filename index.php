<!DOCTYPE html>
<html lang="en">
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
                    <center><img src="images/sun.png"></center>
                    <div class="jumbotron">
                        <h1>
						<strong>Modern Motivation</strong></h1>
                        <p>Get inspirational quotes sent to your phone to keep you motivated on a daily basis.<br>For less than a coffee per month. ($2.99/mo)</p>
                        <p> <a href="#signup" class="btn btn-lg btn-danger" role="button">Sign Up!</a></p>
                    </div>
                </div>
            </div>
        </header>
        <section id="signup">
            <div id="signup" style="height:75vh;" class="container" >
                <center><h2></h2>
                <div style="width:70%;" class="">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h2>Sign Up!</h2>
                                        <b>Fill in the form below to sign up and get motivational texts every morning:</b>
                                    </div>
                                    
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="pay.php" method="post" class="registration-form">
                                        Phone Number:
                                        <div class="form-group">
                                            
                                            <input name="phone" type="phone" class="form-control" id="phone" placeholder="Enter phone number... (US only)"><br>
                                            Timezone:<br>
                                            <select id="timezone" name="timezone" class="form-control">
                                                <option value="0">Eastern</option>
                                                <option value="1">Central</option>
                                                <option value="2">Mountain</option>
                                                <option value="3">Pacific</option>
                                            </select>
                                        </div>

                                       
                                        <button type="submit" class="btn btn-md btn-danger">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        </center>
                
            </div>
        </section>
      
       
       
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
        <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/jquery.mask.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $('#phone').mask('(000) 000-0000');
             });
        </script>
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


