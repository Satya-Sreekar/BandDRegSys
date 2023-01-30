<?php
require __DIR__ . '/vendor/autoload.php';
require_once "Twilio/autoload.php";

$sid = "AC2760c6ebca322afed2935a3b37d2992e"; // Your Account SID from www.twilio.com/console
$token = "0b06eb88fb69651a3abceec28c3a8e7a"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '9398501208', // Text this number
  [
    'from' => '9652635479', // From a valid Twilio number
    'body' => 'Hello from Twilio!'
  ]
);

print $message->sid;
?>