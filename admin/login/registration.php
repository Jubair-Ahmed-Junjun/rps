<?php
   session_start();
   if (isset($_POST['register'])) {
   	$email = $_POST['email'];
   	$password = $_POST['password']; 
   	$conn = mysqli_connect('localhost','root','','reg_db');
   	$sql = "";
   }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h1>Registration Form</h1>
  Email:<input type="email" name="email">
  Password:<input type="password" name="password">
  <input type="checkbox" name="checkbox" value="Register">
</body>
</html>