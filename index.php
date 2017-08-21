<?php
	session_start();
	require 'dbconfig/config.php';
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">

	<div id = "main-wrapper">
		<center>
			<h2>Login Form</h2>
			<img src = "Images/loginImg.png" class = "LoginImage"/>
		</center>
	
	
<!--	<form class="myform" action="index.php" method="post">
		<label><b>Username</b></label>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
		<label><b>Password</b></label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
		<input name="login" type="submit" id="signin_btn" value="Sign In"/><br>
		<a href="signup.php"><input type="button" id="signup_btn" value="Sign Up"/></a>
	</form>-->
	
	<?php
		if(isset($_POST['login']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$query = "SELECT * FROM login WHERE username = '$username' AND password='$password'";
			$query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
					$_SESSION['username']=$username;
					header('location:home5.php');
			}
			else
			{
				echo '<script type = "text/javascript">alert("Invalid Credentials.")</script>';
			}
		}
	?>
	</div>
</body>
</html>