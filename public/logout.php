<?php
	session_start();
	echo session_id();
	$location = "/login.php";
	function clearSession()
	{
	    // clear $_SESSION array
	    session_unset();
	    // delete session data on the server and send the client a new cookie
	    session_regenerate_id(true);
	}
	clearSession();
	header("Location:$location");
	 

 ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Authorized page</title>
</head>
<body>
<div class="container">
	
</div>
</body>
</html>