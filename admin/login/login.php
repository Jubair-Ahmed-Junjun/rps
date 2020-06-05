<?php
      session_start();
      $message = "";
      if(isset($_POST['submit'])){
      	$email = $_POST['email'];
      	$password = $_POST['password'];
      	$conn = mysqli_connect('localhost','root','','shimul');
      	$sql = "SELECT *FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
        	$_SESSION['email'] = '$email';
        	$_SESSION['password'] = '$password';
        	header("location:dashboard.php");
        }
        else{
        	$message = "Email Address or password Not match";
        	
        }
      }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	   <h1 <?php echo $message;?>></h1>
       <form action="" method="POST" >
       	Email:<input type="email" name="email"><br>
       	Password:<input type="password" name="password"><br>
       	<input type="submit" name="submit" value="Login"><br>
        <input type="submit" name="submit" value="Registration"><br>

       	<label><input type="checkbox" name="">Remember me</label>
       </form>
</body>
</html>