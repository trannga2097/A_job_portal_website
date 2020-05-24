<?php

  error_reporting(0);
  
  include('connection/db.php');
  
  session_start();
  
  if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $admin_type = $_POST['admin_type'];

     $sql = "SELECT * FROM `admin_login` WHERE `admin_email` = '$email' AND `admin_pass` = '$password' AND `admin_type` = '2' ";
    
    $result = mysqli_query($conn, $sql);
    
    if($row = mysqli_num_rows($result)>0){
      
    while($user_row = mysqli_fetch_assoc($result)){
            
      $_SESSION['admin_email'] = $user_row['admin_email'];
            
      header('location:admin/admin_dashboard.php');
    
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

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

  <form class="form-signin"  method="post" action="new-post.php">

    <img class="mb-4" src="admin/img/logo.png" alt="" width="102" height="102">

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