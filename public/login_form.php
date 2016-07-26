<?php
	var_dump($_GET);
	var_dump($_POST);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>login form</title>
 </head>
 <body>
 	<form method="POST" action="/login_form.php">
 		<label id="username" for="username">Username</label>
 		<input type="text" name="username" placeholder="Insert username">
 		<label id="pass" for="pass">Username</label>
 		<input type="password" name="pass" placeholder="Insert password">
 		<br/>
 		<span>Remember me</span>
 		<input type="checkbox" name="remember" id="remember" value="yes" checked>
 		<br/>
 		<textarea id="body" name="body" rows="10" cols="40" placeholder="Insert message here."></textarea>
 		<br/>
 		<button type="submit">Login</button>
 	</form>
 
 </body>
 </html>