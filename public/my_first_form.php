<?php 
	var_dump($_GET);
 	var_dump($_POST);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<h2>User Login</h2>
 	<p>
 		<label for="username">click me to focus in the username field</label>
 	</p>
 	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="type in your username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="type in your password">
    </p>
    <p>
        <button type="submit" value="Login" name="submit">Login</button>
    </p>
	</form>



	<!-- For to send a request to duckduckgo with a search term
	<form method="GET" action="https://duckduckgo.com/">
		<p>
			<label for="go">search duckduckgo</label>
			<input type="text" name="q" id="go">
			<input type="submit">
		</p>

	</form> -->
	<h2>Compose Email</h2>

	<form method="POST" action="/my_first_form.php">

		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
		<label for="mailing_list">Save a copy and send it to my set folder</label>
		
		<p>
        <label for="to">To</label>
        <input id="to" name="to" type="text" placeholder="email">
    	</p>
    	<p>
        <label for="from">From</label>
        <input id="from" name="from" type="text" placeholder="from">
    	</p>
    	<textarea id="body" name="body" rows="10" cols="40"></textarea>
    	</br>
    	<input type="submit" value="Send">
	</form>

	<a href="https://www.reddit.com/search?q=javascript&sort=top" target="_blank">Search reddit for 'javascript' and sort by top</a>

	<form method="GET" action="https://www.reddit.com/search" target="_blank">
		<input type="text" name="q">
		<input name="sort" type="hidden" value="top">
		<input type="submit">
	</form>
	<h2>Multiple Choice</h2>
	<form method="POST" action="/my_first_form.php">
		<p>What language do you speak the best? (pick one)</p>
		<label><input type="radio" name="languages" value="Spanish">Spanish</label>
		<label><input type="radio" name="languages" value="English">English</label>
		<label><input type="radio" name="laguanges" value="Chinese">Chinese</label>
		<br/>
		<p>What is the make of the car/s you own?</p>
		<label><input type="checkbox" name="question2" value="Mazda">Mazda</label>
		<label><input type="checkbox" name="question3" value="Toyota">Toyota</label>
		<label><input type="checkbox" name="question4" value="Ferrari">Ferrari</label>
		<br/>
		<button type="submit">Save answers</button>
	</form>

	<h2>Select Testing</h2>
	<form method="POST" action="/my_first_form.php">
		<label for="kids">Do you have kids?</label>
		<select id="kids" name="kids">
			<option value="1">Yes</option>
			<option value="2">No</option>
		</select>
		<button type="submit">Submit</button>
	</form>

	<form method="POST" action="/my_first_form.php">
		<label for="brand">What brand is your computer?</label>
		<select id="brand" name="brand[]" multiple>
			<option value="Dell">Dell</option>
			<option value="Mac">Mac</option>
			<option value="Lenovo">Lenovo</option>
		</select>
		<button type="submit">Submit</button>
	</form>



 </body>
 </html>