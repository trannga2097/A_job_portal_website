<?php
	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM admin_login WHERE id= '$del' ";
            
            
    mysqli_query($conn,$sql);

     echo '<script>alert("Deleted Successfully!"); location.replace("http://localhost:8080/jobportal/admin/admin.php");</script>';

?>