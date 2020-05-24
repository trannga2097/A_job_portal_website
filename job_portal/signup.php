<?php

    error_reporting(0);
  
    include('connection/db.php'); 

    session_start();
  
  if(isset($_POST['submit'])){
    
    $fullname = $_POST['fullname'];

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $date = $_POST['date'];

    $mobile_number = $_POST['mobile_number'];  
    
    $sql = "SELECT * FROM `jobseeker` WHERE `email` = '$email'";
    
    $result = mysqli_query($conn, $sql);
    
    if($row = mysqli_num_rows($result)>0){
      
      echo "<script>alert('Email already excist')</script>";
      
    }else{
      
      if(empty($fullname)||empty($username)||empty($email)||empty($password)||empty($date)||

        empty($mobile_number)){
               
          $message = "<h6>"."Plss fill all fields"."</h6>";
             
      }else{
               
        $query = "INSERT INTO `jobseeker`( `fullname`, `username`,`email`, `password`,`date`,

        `mobile_number`) VALUES ('$fullname','$username','$email','$password','$date','$

        mobile_number')";
      
        $query_result = mysqli_query($conn, $query);
        
        if($query_result){
          
          $user_sql = "SELECT * FROM `jobseeker` WHERE `email` = '$email'";
    
          $user_result = mysqli_query($conn, $user_sql);
          
          while($user_row = mysqli_fetch_assoc($user_result)){
            
            $_SESSION['id'] = $user_row['id'];
            
            header('location:job-post.php');
    
          }
        }
      
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

    <title>Signup</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

  <form class="form-signin" id="jobseeker" method="post" action="signup.php" name="jobseeker">

    <img class="mb-4" src="admin/img/logo.png" alt="" width="102" height="102">

    <h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>

    <input type="email" name="email" placeholder="Email" class="form-control" required 

    autofocus style="margin-bottom: 5px;"></input>
              
    <input type="text" name="fullname" placeholder="Full Name" class="form-control" required 

    autofocus style="margin-bottom: 5px;"></input>
              
    <input type="text" name="username" placeholder="Username" class="form-control" required 

    autofocus style="margin-bottom: 5px;"></input>
              
    <input type="password" name="password" placeholder="Password" class="form-control" 

    required autofocus style="margin-bottom: 5px;"></input>

    <input type="number" name="mobile_number" placeholder="Moblie Number" class="form-control" 

    required autofocus style="margin-bottom: 5px;"></input>

    <input type="date" name="date" placeholder="Date of Birth" class="form-control" required 

    autofocus style="margin-bottom: 5px;"></input>

    <div class="checkbox mb-3 mt-3">

      <label>

      <input type="checkbox" value="remember-me">  Remember
      
    </label> 
    
    </div>
              
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">

    Sign Up

    </button>

    <br>

    <a href="job-post.php">Already Account</a>

    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>

  </form>

</body>

</html>

