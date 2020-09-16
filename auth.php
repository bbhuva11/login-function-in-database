<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location:loginfun.php");
		exit();
	}
?>