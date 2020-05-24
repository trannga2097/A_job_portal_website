<?php
	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM job_category WHERE id = '$del' ";
            
    mysqli_query($conn,$sql);

    echo '<script>alert("Deleted Successfully!"); location.replace("http://localhost:8080/jobportal/admin/category.php");</script>';

?>