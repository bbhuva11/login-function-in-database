<?php
	include("auth.php");
?>
<html>
	<head>
		<title>Welcome to home page</title>
		<link rel="stylesheet" href="css/loginfun.css"/>
	</head>
	<body>
		<div class="form">
			<p>Welcome <?php echo $_SESSION['username'];  ?> </p>
			<p><a href="dashboard.php">View Dashboard</a></p>
			<p><a href="logoutfun.php">Logout</a></p>
		</div>
	</body>
</html>