<?php
	require('db_connect.php');

	if(isset($_POST['id']))
	{
		//$del_id=$row['id'];
	

		$sql = "delete from new_record WHERE id = '$del1'";

		if(mysqli_query($con,$sql));
		{
			echo "<script>alert('successfully deleted');</script>";
		}

	}
?>