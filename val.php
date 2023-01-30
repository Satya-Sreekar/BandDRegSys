<html>
    <head>
        <title>Validation Page</title>
    </head>
    <Body>
    <?php
    require 'Datab.php';
        $un=$_POST["Uname"];
        $pwd=$_POST["pwd"];
        $rl=$_POST["role"];
        $DUB = "USE baandd";
        //echo "Name:" . $un . "<br>Password:" . $pwd . "<br>Role:" . $rl . "<br>";   //UNCOMMENT TO SEE THE DATA SENT FROM THE LOGIN PAGE
        $DU= "SELECT * FROM login";
                                                                    // Check connection
        if ($conn->connect_error) 
            {                                             
                die("Connection failed: " . $conn->connect_error);
            }
        if ($conn->query($UDB) === TRUE)
                                                                            /*
                                                                            {echo "Database in use";
                                                                            } 
                                                                            else {
                                                                            echo "Error connecting to database: " . $conn->error;
                                                                           } 
                                                                            */
                                                      
            $result = $conn->query($DU);                              //Select table query and stored in result                           //Select table query and stored in result
            $ct=0;                                                           //INITIALISE FLAG VARIABLE
            while($row = $result->fetch_assoc())                                //PARSING THROUGH THE DATA
                { 
                    if ($row["Uname"] === $un) 
                    {
                        if($row["pwd"] === $pwd)
                        {
                            $ct=1;
                            break;
                        }
                        else
                        {
                            $ct=2;
                        }                                               //SET FLAG VARIABLE
                        
                    }
                    else{
                        $ct=3;
                    }
                }
        
        if($ct==1)
            {   session_start();
                $_SESSION['UN'] = $un;
                if($rl=="BOD")
                {
                    header('Location: bod.php'); 
                }
                elseif($rl=="UVS")
                {
                    header('Location: uvs.php'); 
                }                                             //IF USER AND PASSWORD MATCH ARE FOUND
            } 
        elseif($ct==2)
            {
                echo "<script>alert('Incorrect Password!Try Again')</script>";
                echo "<script>location.href='login.php'</script>";                               // IF USER IS FOUND, PASSWORD MISMATCH
            }
        elseif($ct==3)
            {
                echo "<script>alert('User Not found!Try Again')</script>";                                // IF USER IS NOT FOUND
                echo "<script>location.href='login.php'</script>";
            }
        ?>  
    </body>
</html>1
