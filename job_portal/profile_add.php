<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Job Portal</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link href="scss/cover.css" rel="stylesheet">

  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

      <main role="main" class="inner cover">

      <h1 class="cover-heading">Congratulation!</h1>

 <?php 

  include('connection/db.php');

  session_start();

  error_reporting(0);

  if(isset($_POST["submit"])){

    $name=$_POST['name'];

    $dob=$_POST['dob'];

    $email=$_POST['email'];

    $user_email=$_SESSION['email'];

    $contact_number=$_POST['contact_number'];

    $img=$_FILES["img"]["name"];

    $tmp_name=$_FILES["img"]["tmp_name"];

    $path="upload/".$img;

    $img1=explode(".",$img);

    $ext=$img1[1];

    $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip","docx");

    $query=mysqli_query($conn,"SELECT * FROM profiles WHERE user_email='{$_SESSION['email']}'");

    $query_check=mysqli_num_rows($query);

    if (!empty($query_check)) {

     $query=mysqli_query($conn,"UPDATE  profiles SET img='$img',name='$name',dob='$dob',contact_number='$contact_number',email='$email' WHERE user_email='$user_email' ");

    if ($query) {

       echo "Profile updated Successfully!";

     }else{

      echo "Some Error Please try again!";

     }

    }else{

    if(in_array($ext,$allowed)){

    move_uploaded_file($tmp_name,$path);

    $sql = "INSERT INTO profiles (img,name,dob,contact_number,email,user_email) VALUES ('$img','$name','$dob','$contact_number','$email','$user_email')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) { ?>

    <p class=lead>Your Form is Added Successfully!</p>

<?php

  }else{

    echo "Failure!";

  }

  }

  }
  
}

?>

        <p class="lead">

          <a href="http://localhost:8080/jobportal" class="btn btn-lg btn-secondary">Back!</a>

        </p>
        
      </main>

      <footer class="mastfoot mt-auto">

        <div class="inner">

        </div>

      </footer>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <script src="../../assets/js/vendor/popper.min.js"></script>

    <script src="../../dist/js/bootstrap.min.js"></script>

  </body>
  
</html>

