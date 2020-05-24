<?php 

  include('connection/db.php');

  if (isset($_POST['submit'])) {

    $job_id=$_POST['job_id'];

    $job_tittle=$_POST['job_tittle'];

    $description=$_POST['description'];

    $keyword=$_POST['keyword'];

    $country=$_POST['country'];

    $province=$_POST['province'];

    $detail_address=$_POST['detail_address'];

    $category=$_POST['category'];

    $job_time=$_POST['job_time'];


    $sql1 = mysqli_query($conn,"UPDATE `all_jobs` SET  `job_tittle`='$job_tittle', `description`='$description', `keyword`='$keyword',`country`='$country', `province`='$province', `detail_address`='$detail_address', `category`='$category',`job_time`='$job_time' WHERE `job_id`='$job_id'");

    if ($sql1) {

     echo '<script>alert("Updated Successfully!"); location.replace("http://localhost:8080/jobportal/admin/job_create.php");</script>';

    }else{

        echo "Failure";

    }


  }
  
 ?>