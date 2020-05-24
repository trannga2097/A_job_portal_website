<?php 

	include('connection/db.php');

	$view = $_POST['view'];

	$name = $_POST['name'];

	$comments = $_POST['comments'];

	$email = $_POST['email'];
	
	$num = $_POST['num'];


	$sql = "INSERT INTO `feedback`(`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES ('','$name','$email','$num','$view','$comments')";
            
    $result = mysqli_query($conn,$sql);

    if($result){

    	echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace("http://localhost:8080/jobportal/index.php");</script>';

    }else{

    	echo "some error please try again";
    	
    };

?>