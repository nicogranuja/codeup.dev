<?php
	session_start();
	echo session_id();
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	$location = "/login.php";
	$welcomeMessage="";

	$sessionId = session_id();
	
	// if(empty($_SESSION['key'])){
	if($sessionId != $_SESSION['key']){
		session_regenerate_id();
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
	<h2><?=htmlspecialchars(strip_tags($welcomeMessage))?></h2>
	<a href="/logout.php" title="">Log Out</a>


</div>
</body>
</html>