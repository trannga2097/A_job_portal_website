<?php

	include('connection/db.php');

	echo $category=$_POST['category'];

	echo $description=$_POST['description'];


	$sql = "INSERT INTO `job_category`(`category`, `des`) VALUES ('$category','$description')";
            
    $result = mysqli_query($conn,$sql);

    if($result){

    	echo '<script>alert("Added Successfully!"); location.replace("http://localhost:8080/jobportal/admin/category.php");</script>';

    }else{

    	echo "some error please try again";
    	
    };
	
?>