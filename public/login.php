<?php 
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$location = "/authorized.php";
	if($username == "guest" && $password == "password"){
		header("Location:$location");
		die;
	}
	else if (!empty($username) || !empty($password)){
		echo "login failed";
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
	<form method="POST">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" class="btn">
    </form>
	
</div>
</body>
</html>