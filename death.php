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
        <title>
            Death Registration Form
        </title>
        <link rel="stylesheet" href="birth.css">
    </head>
    <body>
        <form action="submit.php">
        <table>
            <tr>
                <th>
                    Gender
                </th>
                <td>
                <select id="sex" name="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </td>
            </tr>

            <tr>
                <th>
                    District
                </th>
                <td>
                    <input type="text" id="district" name="district">
                </td>
            </tr>

            <tr>
                <th>
                    Place of death
                </th>
                <td>
                <select id="dp" name="dp">
                    <option value="Hospital">Hospital / Institution</option>
                    <option value="Home">Home/other</option>
                </td>
            </tr>

            <tr>
                <th>
                    Address
                </th>
                <td>
                    <input type="text" id="address" name="address"></input>
                </td>
            </tr>
            <tr>

            <tr>
                <th>
                    Date of death
                </th>
                <td>
                    <input type="date" id="deathday" name="deathday">
                </td>
            </tr>
            
            <tr>
                <th>
                    Mobile number
                </th>
                <td>
                    <input type="long" id="mobilenumber" name = "mobilenumber"></input>
                    <input type="submit">Get OTP</input>
                </td>
            </tr>

            <tr>
                <th>
                    OTP
                </th>
                <td>
                    <input type="text" id="otp" name="otp">
                </td>
            </tr>

            <tr>
            <td>
                <a href="logout.php">Logout</a>
            </td>
            <td>
                <input type="submit" value="submit"></input>
            </td>
        </tr>
        </table>
        </form>
    </body>
</html>