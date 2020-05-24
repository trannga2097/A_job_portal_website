<?php

	$conn = mysqli_connect("localhost","root","","jobportal")or die(mysqli_error());

	$sql = "SELECT * FROM `apply_job`";
		
	$result = mysqli_query($conn, $sql);
	
	$rowcount=mysqli_num_rows($result);

?>

<table border="1">

<tr>

<td>download</td>

</tr>

<?php

for($i=1;$i<=$rowcount;$i++){

	$row=mysqli_fetch_array($result);

?>

<tr>

<td><a href="upload/<?php echo $row["file"] ?>"><?php echo $row["file"] ?></a></td>

</tr>

<?php	

}

?>

</table>