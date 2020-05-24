<?php

	include('connection/db.php');

	echo $company=$_POST['company'];

	echo $description=$_POST['description'];

    echo $admin=$_POST['admin'];


	$sql = "INSERT INTO `company`(`company`, `des`, `admin`) VALUES ('$company','$description','$admin')";
            
    $result = mysqli_query($conn,$sql);

    if($result){

    	echo '<script>alert("Added Successfully!"); location.replace("http://localhost:8080/jobportal/admin/create_company.php");</script>';
    }else{

    	echo "some error please try again";
    	
    };
	
?>