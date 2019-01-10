<?php
session_start();
require('config.php');
require_once '../assets/Twilio/autoload.php';
use Twilio\Rest\Client;
require_once('../assets/stripe/init.php');
\Stripe\Stripe::setApiKey($stripePrivate);
// Try to charge card
try
{
  $customer = \Stripe\Customer::create(array(
    'email' => $_POST['stripeEmail'],
    'source'  => $_POST['stripeToken'],
  )); 
  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => 299,
      'currency' => 'usd',
  ]);
  
// Retrieve and make data ready for DB
  $endDate = strtotime('+31 days', time());
  $fireTime = $_SESSION['time'];
  $phone = $_SESSION['phone'];
  $query = "SELECT * FROM users WHERE phone = '$phone';";
  $result = mysqli_query($conn,$query);
// Make sure they do not already have account
  if(mysqli_num_rows($result) == 0){
    $query = "INSERT INTO users (phone, fireTime, endDate) VALUES ('$phone','$fireTime','$endDate')";
    mysqli_query($conn,$query);
  }
  $client = new Client($twilioaccount_sid, $twilioauth_token);
      $messages = $client->messages->create("$phone", array(
        'From' => "+19789654346",
        'Body' => "Welcome to Modern Motivation!",
      )); 
  header('Location: ../redir.php?url=index.php&text=Payment successful!<br>Welcome to the Modern Motivation family :)');
 exit;
}
catch(Exception $e)
{
  // Failure of payment
  header('Location: ../redir.php?url=index.php&text=Payment UNsuccessful :(((((');
  error_log("unable to sign up customer:" . $_POST['stripeEmail'].", error:" . $e->getMessage());
}
?>