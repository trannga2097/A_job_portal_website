<?php 

  include('connection/db.php');

  if (isset($_POST['submit'])) {

    $id=$_POST['id'];

    $email=$_POST['email'];

    $password=$_POST['password'];

    $fullname=$_POST['fullname'];

    $phone=$_POST['phone'];

   $admin_type=$_POST['admin_type'];

    $sql1 = mysqli_query($conn,"UPDATE `admin_login` SET `admin_email`='$email',`admin_pass`='$password',`admin_fullname`='$fullname',`admin_phone`='$phone',`admin_type`='$admin_type' WHERE `id`='$id'");

    if ($sql1) {

      echo '<script>alert("Updated Successfully!"); location.replace("http://localhost:8080/jobportal/admin/admin.php");</script>';

    }else{

        echo "Failure";

    }


  }
  
 ?>
