<?php

session_start ();
if (!isset($_SESSION['UN']))
{
    header("location:login.php");
    exit;
}
$bd = $_POST["birthday"];
$s = $_POST["sex"];
$fn = $_POST["Fname"];
$ANF = $_POST["ANF"];
$mn = $_POST["Mname"];
$ANM = $_POST["ANM"];
$PB = $_POST["bp"];
$add = $_POST["Add"];
echo '
<html>
    <head>
        <title>
            Congratulations!
        </title>
        <style>
        html
{
    background: linear-gradient(#141e30, #243b55);
    height:100%
}
table
{
    margin-top:8%;
    margin-left:25% ;
    text-align: center;
    font-size: larger;
    border: 1px solid;
    border-radius:15px;
    background-color:white;
    padding:2%;
}
td
{
    padding: 2%;
}
a,a:visited
{
    text-decoration: none;
}
        </style>
    </head>
    <body>
        <table>
        <tr>
            <th>
                Date of birth:
            </th>
            <td>
                '.$bd.'
            </td>
        </tr>
        <tr>
            <th>
                Sex
            </th>
            <td>
                '.$s.'
            </td>
        </tr>
        <tr>
            <th>
                Father Name
            </th>
            <td>
                '.$fn.'
            </td>
        </tr>
        <tr>
            <th>
                Mother Name
            </th>
            <td>
                '.$mn.'
            </td>
        </tr>
        <tr>
            <th>
                Aadhar No Father
            </th>
            <td>
                '.$ANF.'
            </td>
        </tr>
        <tr>
            <th>
                Aadhar No Mother
            </th>
            <td>
                '.$ANM.'
            </td>
        </tr>
        <tr>
            <th>
                Plate of Birth
            </th>
            <td>
                '.$PB.'
            </td>
        </tr>
        <tr>
            <th>
                Address
            </th>
            <td>
                '.$add.'
            </td>
        </tr>
        <tr>
            <th>
                
            </th>
            <td>
            <a href="logout.php">Logout</a>
            </td>
        </tr>
        </table>
    </body>
</html>'
;
?>