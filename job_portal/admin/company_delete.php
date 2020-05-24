<?php
	include('connection/db.php');

	$del = $_GET['del'];

	$sql = "DELETE FROM company WHERE company_id = '$del' ";
            
    mysqli_query($conn,$sql);

    echo '<script>alert("Deleted Successfully!"); location.replace("http://localhost:8080/jobportal/admin/create_company.php");</script>';

?>