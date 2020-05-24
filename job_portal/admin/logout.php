
<?php
    
    include('connection/db.php'); 

	session_start();
	
	session_unset();

	$sql = "SELECT * FROM `admin_login` WHERE `admin_email` = '{$_SESSION['email']}' AND `admin_pass` = '$password' AND `admin_type`='2' ";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {


    	header('location:admin_login.php');
    }
	
	
			
?>
