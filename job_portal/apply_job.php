<!doctype html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>


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

          if(isset($_REQUEST["submit"])){

          $first_name=$_POST['first_name'];

          $last_name=$_POST['last_name'];

          $dob=$_POST['dob'];
 
          $job_id=$_POST['job_id'];

          $job_seeker=$_POST['job_seeker'];

          $contact_number=$_POST['contact_number'];

          $file=$_FILES["file"]["name"];

          $tmp_name=$_FILES["file"]["tmp_name"];

          $path="apply_job/".$file;

          $file1=explode(".",$file);

          $ext=$file1[1];

          $allowed=array("jpg","png","gif","pdf","wmv","pdf","zip","docx");

          if(in_array($ext,$allowed)){

          move_uploaded_file($tmp_name,$path);

          $sql = "INSERT INTO apply_job (
          first_name,last_name,dob,file,job_id,job_seeker,contact_number) VALUES ('$first_name','$last_name','$dob','$file','$job_id','$job_seeker','$contact_number')";
            
          $result = mysqli_query($conn, $sql);

          if ($result) {?>
          	
          	<p class=lead>Your Form is Sent Successfully!</p>

          <?php

          }else{

            echo "Failure!";

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
