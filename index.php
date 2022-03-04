<?php
    session_start();
	include('connection.php');
	if(isset($_POST['login'])) {
		//Get values from form in login.php file
	    $username = $_POST['username'];
		$password = md5($_POST['password']);
		//To prevent mysql injection
		$username = mysqli_real_escape_string($db,$username);
		$password = mysqli_real_escape_string($db,$password);
		$query 	= mysqli_query($db,"SELECT * FROM users WHERE username='$username' and password='$password'");
			$row = mysqli_fetch_array($query);
			if ($row['username']== $username && $row['password']== $password) 
				{	
					$_SESSION['username']=$username;
				    if($row['role'] == 'admin'){
					     header('location:index.php');}
					else{
						 header('location:dashboard.php');
					}
					
				}
			else
				{
					echo 'Invalid Credentials or role!';
				}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	</head>

	<body style="background-color: #efefef;background-image:url('images/gelephu.jpg');">

	<div class="display">
	<h1>&nbsp;&nbsp; &nbsp;  Login Form</h1>
	<div class="input-group" style="padding:30px 70px;">
	<form method="post" action ="index.php" enctype="">
	
	<div class="fontuser">
	<input type="text" name="username" class="form-control" placeholder="Username" required>
	<i class="fa fa-user fa-lg"></i></div>
	</br>
	<div class="fontpassword">
	<input type="password" name="password" class="form-control" placeholder="Password" required>
	<i class="fa fa-key"></i>
	<br/>
	<input type="submit" name="login" value="Login" class="form-control" style="background-color:#80aaff;">
	<br/>
	<a href="signup.php"><b>Don't have an account?</b></a>
	</form>
	</div>
	</div>
</body>
</html>