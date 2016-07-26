<?php
	var_dump($_GET);
	var_dump($_POST);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Form</title>
 </head>
 <body>
 	<form method="POST" action="/login_form.php">
 		<label id="name" for="name">First Name</label>
 		<input type="text" name="name" placeholder="Insert your name">
 		<br/>
 		<label id="lname" for="lname">Last Name</label>
 		<input type="text" name="lname" placeholder="Insert your Lastname">

 		<br/>
 		<label id="email" for="email">Email</label>
 		<input type="text" name="email" placeholder="Insert your Email">
 		<br/>

 		<label id="username" for="username">Username</label>
 		<input type="text" name="username" placeholder="Insert username">
 		<br/>
 		<label id="pass" for="pass">Password</label>
 		<input type="password" name="pass" placeholder="Insert password">
 		<br/>
 		<label id="cpass" for="cpass">Confirm Password</label>
 		<input type="password" name="cpass" placeholder="Confirm password">
 		<br/>
 		<span>Sign me up for the newsletter</span>
 		<input type="checkbox" name="newsletter" id="newsletter" value="yes" checked>
 		<br/>
 		
 		<button type="submit">Sign Up</button>
 	</form>
 </body>
 </html>