<?php

	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM all_jobs WHERE job_id = '$del' ";
            
    mysqli_query($conn,$sql);

    echo '<script>alert("Deleted Successfully!"); location.replace("http://localhost:8080/jobportal/admin/job_create.php");</script>';

?>