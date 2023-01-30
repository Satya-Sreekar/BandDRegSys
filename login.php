<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="index.css">
<?php session_start();
	if(isset($_SESSION['UN'])){
		header("location:logout.php");
		exit;
	}
?>
<h1>LOGIN</h1>
<div class="log">
<div class="login">
<form action="val.php" method="POST">
  
  <label for="Uname"><h3>User Name:</h3></label>
  <input type="text" id="Uname" name="Uname" value="" placeholder="Enter your User Name">
  
  <label for="pwd"><h3>Password:</h3></label>
  <input type="password" id="pwd" name="pwd" value="" placeholder="Enter your Password">
  
  <label for="role"><h3>Select One:</h3></label>
  <select id="role" name="role">
        <option value="BOD">Birth/Death Registration</option>
        <option value="UVS">Update Vaccine Status</option>
  </select><br>
  <input type="submit" value="Submit">
</form> 
  </div>
</div>
</body>
</html>