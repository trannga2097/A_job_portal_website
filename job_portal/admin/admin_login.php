<?php
    error_reporting(0);
	
    include('connection/db.php');
	
	session_start();
	
	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		
		$password = $_POST['password'];
		
		
		$sql = "SELECT * FROM `admin_login` WHERE `admin_email` = '$email' AND `admin_pass` = '$password'";
		
		$result = mysqli_query($conn, $sql);
		
		if($row = mysqli_num_rows($result)>0){
			
			while($user_row = mysqli_fetch_assoc($result)){
						
						$_SESSION['admin_email'] = $user_row['admin_email'];
						
						header('location:admin_dashboard.php');
		
					}
			
			
		}else{
			
			if(empty($email)||empty($password)){
				
				
					echo "<script>alert('Plss fill all fields')</script>";
			
				
			}else{
				
				
			     echo "<script>alert('Email or Password doesn't match')</script>";
			
			}
			
		}
		
	}

?>


<!doctype html>

<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="description" content="">

	<meta name="author" content="">

	<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


	<title>Admin_Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="css/admin_login.css" rel="stylesheet">

	<script src="js/admin_login.js"></script>

</head>

<body class="text-center">

	<form class="form-signin" id="admin_login" method="post" action="admin_login.php" name="admin_login">

		<img class="mb-4" src="img/logo.png" alt="" width="102" height="102">

		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


		<label for="inputEmail" class="sr-only">Email address</label>

		<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>

		<label for="inputPassword" class="sr-only">Password</label>

		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

		<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" placeholder="sign in">Sign In</button>

		<p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>

	</form>

</body>

</html>

