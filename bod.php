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
            Birth or death registration
        </title>
        <link rel="stylesheet" href="bod.css">
    </head>
    <header>
        <div class="logout">
        <a href="logout.php"><h3>Logout</h3></a>
        </div>
    </header>
    <body>
        <table>
        <tr>
            <th>
                Birth Registration
            </th>
            <th>
                Death Registration       
            </th>
        </tr>
        <tr>
            <td>
                <a href="birth.php">
                    <img src="birth.png" alt="birth Registration" width="350" height="350">
                </a>       
            </td>    
            <td>
                <a href="death.php">
                    <img src="death.jpg" alt="death" width="400" height="400">
                </a>
            </td>
        </tr>
        </table>
    </body>
</html>