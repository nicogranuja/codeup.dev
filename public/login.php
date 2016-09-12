<?php 
	require "functions.php";
	//start the session
	session_start();
	echo session_id();
	function pageController(){
		$data = [];
		// $username = isset($_POST['username']) ? $_POST['username'] : '';
		$username = inputGet('username');
		// $password = isset($_POST['password']) ? $_POST['password'] : '';
		$password = inputGet('password');
		$location = "/authorized.php";
		$errorMessage="";
		if($username == "guest" && $password == "password"){
			// get the current session ID
			$logged_in_user = session_id();

			$_SESSION['key'] = $logged_in_user;
			$_SESSION['username'] = $username;

			if(!empty($_SESSION['username'])){
				header("Location:$location");
			}
			die;

		}
		// else if (!empty($username) || !empty($password)){
		else if(inputHas('username') || inputHas('password')){
			$errorMessage =  "login failed";
		}
		
		$data = ['errorMessage'=> $errorMessage];
		return $data;
	}
	extract(pageController());
 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>
<body>
<div class="container">
	<form method="POST">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <!-- <h4 style="color:red;"><?=htmlspecialchars(strip_tags($errorMessage))?></h4> -->
        <h4 style="color:red;"><?=escape($errorMessage)?></h4>
        <input type="submit" class="btn">
    </form>
	
</div>
</body>
</html>