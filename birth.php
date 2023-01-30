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
            Birth Registration Form
        </title>
        <link rel="stylesheet" href="birth.css">
    </head>
    <body>
        <form action="birthpro.php" method="post">
        <table>
            <tr>
                <th>
                    Date of birth
                </th>
                <td>
                <input type="date" id="birthday" name="birthday">
                </td>
            </tr>
            <tr>
                <th>
                    Sex
                </th>
                <td>
                <select id="sex" name="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </td>
            </tr>
            <tr>
                <th>
                    Name of Father
                </th>
                <td>
                    <input type="text" id="Fname" name="Fname"></input>
                </td>    
            </tr>
            
            <tr>
                <th>
                    Aadhar No of Father
                </th>
                <td>
                    <input type="text" id="ANF" name="ANF"></input>
                </td>    
            </tr>
            <tr>
                <th>
                    Name of Mother
                </th>
                <td>
                    <input type="text" id="Mname" name="Mname"></input>
                </td>    
            </tr>
            
            <tr>
                <th>
                    Aadhar No of Mother
                </th>
                <td>
                    <input type="text" id="ANM" name="ANM" ></input>
                </td>    
            </tr>
            <tr>
                <th>
                    Place of birth
                </th>
                <td>
                <select id="bp" name="bp">
                    <option value="Hospital">Hospital / Institution</option>
                    <option value="Home">Home</option>
                    <option value="Other">Other</option>
                </td>
            </tr>
            <tr>
                <th>
                    Address
                </th>
                <td>
                    <input type="text" id="Add" name="Add"></input>
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