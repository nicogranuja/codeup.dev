<?php
	session_start();
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	$location = "/login.php";
	$welcomeMessage="";
	if(empty($_SESSION['key'])){
		header("Location:$location");
	}
	else{
		$welcomeMessage = "Welcome, " .$_SESSION['username'];
	}

 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Authorized page</title>
</head>
<body>
<div class="container">
	<h1>Authorized</h1>
	<h2><?=$welcomeMessage ?></h2>
</div>
</body>
</html>