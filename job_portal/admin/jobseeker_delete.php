<?php
	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM jobseeker WHERE id = '$del' ";
            
            
    mysqli_query($conn,$sql);

    echo '<script>alert("Deleted Successfully!"); location.replace("http://localhost:8080/jobportal/admin/jobseeker.php");</script>';

?>