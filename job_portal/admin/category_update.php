<?php 

  include('connection/db.php');

  if (isset($_POST['submit'])) {

    $id=$_POST['id'];

    $category=$_POST['category'];

    $description=$_POST['description'];

    $sql1 = mysqli_query($conn,"UPDATE `job_category` SET `category`='$category',`des`='$description' WHERE `id`='$id'");

    if ($sql1) {

      echo '<script>alert("Updated Successfully!"); location.replace("http://localhost:8080/jobportal/admin/category.php");</script>';

    }else{

        echo "Failure";

    }


  }
  
 ?>