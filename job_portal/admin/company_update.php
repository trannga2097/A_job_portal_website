<?php 

  include('connection/db.php');

  if (isset($_POST['submit'])) {

    $company_id=$_POST['company_id'];

    $company=$_POST['company'];

    $description=$_POST['description'];

    $admin=$_POST['admin'];

    $sql1 = mysqli_query($conn,"UPDATE `company` SET `company`='$company',`des`='$description',`admin`='$admin' WHERE `company_id`='$company_id'");

    if ($sql1) {

     echo '<script>alert("Updated Successfully!"); location.replace("http://localhost:8080/jobportal/admin/create_company.php");</script>';

    }else{

        echo "Failure";

    }


  }
  
 ?>