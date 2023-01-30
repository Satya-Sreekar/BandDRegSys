<?php

session_start ();
if (!isset($_SESSION['UN']))
{
    header("location:login.php");
    exit;
}
?>
<html>
    <head>
    <style>
        html
{
    background: linear-gradient(#141e30, #243b55);
    height:100%
}
h1
{
    margin-top: 25%;
    color: aqua;

}
    </style>    
</head>
<center><h1>Successful Submission</h1>
<button><a href="bod.php">home</a></button></center>
    
</html>