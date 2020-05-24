<!-- create job add chinh la add new job -->
<?php

	session_start();

	include('connection/db.php');
	
	$LogIn=$_SESSION['admin_email'];

	$job_tittle=$_POST['job_tittle'];

	$description=$_POST['description'];

	$keyword=$_POST['keyword'];

	$country=$_POST['country'];

	$province=$_POST['province'];	

	$detail_address=$_POST['detail_address'];

	$category=$_POST['category'];

	$job_time=$_POST['job_time'];


	$sql = "INSERT INTO `all_jobs`(`company_email`, `job_tittle`, `description`,`keyword`, `country`,`province`,`detail_address`,`category`) VALUES ('$LogIn','$job_tittle','$description','$keyword','$country','$province','$detail_address','$category')";
            
    $result = mysqli_query($conn,$sql);


    if($result){

    	echo '<script>alert("Successfully!"); location.replace("http://localhost:8080/jobportal/admin/job_create.php");</script>';

    }else{

    	echo "some error please try again";
    	
    };
	
?>