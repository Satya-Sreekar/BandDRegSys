<?php
$to = "laasya0504@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: satyasreekarpattaswami@.com" . "\r\n" .
"CC: satyasreekar@hotmail.com";

mail($to,$subject,$txt,$headers);
?>