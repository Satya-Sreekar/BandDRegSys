<?php
session_start();
session_unset();
session_destroy();
header( "refresh:3;url= login.php" );
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
    <H1><Center>Sucessfully Logged Out</Center></H1>
</html>