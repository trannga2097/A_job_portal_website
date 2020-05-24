<?php

	include('connection/db.php');

	echo $email=$_POST['email'];

	echo $password=$_POST['password'];

	echo $fullname=$_POST['fullname'];

	echo $phone=$_POST['phone'];

	echo $admin_type=$_POST['admin_type'];	


	$sql = "INSERT INTO `admin_login`(`admin_email`, `admin_pass`, `admin_fullname`, `admin_phone`, `admin_type`) VALUES ('$email','$password','$fullname','$phone','$admin_type')";
            
    $result = mysqli_query($conn,$sql);

    if($result){

    	echo '<script>alert("Added Successfully!"); location.replace("http://localhost:8080/jobportal/admin/admin.php");</script>';

    }else{

    	echo "some error please try again";
    	
    };
	
?>