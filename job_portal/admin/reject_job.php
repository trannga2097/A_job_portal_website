<?php
	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM apply_job WHERE id = '$del' ";
            
    mysqli_query($conn,$sql);

    header('location:apply_jobs.php');

?>