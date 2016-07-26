<?php
	var_dump($_GET);
	var_dump($_POST);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Pizza Form</title>
 	
 </head>
 <body>
 	<form method="POST" action="/pizza_form.php">

 	<!-- Pizza first options -->
 		<label for="number">Select the number of Pizzas</label>
		<select id="number" name="number">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>
		<br/>

		<!-- Pizza Crust -->
		<label for="crust">Select the kind of Crust</label>
		<label><input type="radio" name="crust" value="tcrust">Thin Crust</label>
		<label><input type="radio" name="crust" value="rcrust">Regular Crust</label>
		<label><input type="radio" name="crust" value="ccrust">Cheesy Crust</label>
		<br/>

		<!-- Pizza sizes -->
		<label for="size">Select the size</label>
		<select id="size" name="size">
			<option value="8">8 inches</option>
			<option value="12">12 inches</option>
			<option value="15">15 inches</option>
			<option value="20">20 inches</option>
		</select>
		<br/>


		<!-- Beggining Toppings -->
		<label for="toppings">Select the Toppings</label>
		<br/>
		<label><input type="checkbox" name="topping1" value="ham">Ham
			<img src="/img/ham.jpeg" alt="Car">
		</label>
		<label><input type="checkbox" name="topping2" value="pepperoni">Pepperoni
			<img src="/img/pepperoni.jpeg" alt="Car">
		</label>
		<label><input type="checkbox" name="topping3" value="bacon">Bacon
			<img src="/img/BACON.jpeg" alt="Car">
		</label>
		<br/>

		<!-- User Data -->
		<label id="name" for="name">Name</label>
 		<input type="text" name="name" placeholder="Insert your name">
 		<br/>
 		<label id="address" for="address">Address</label>
 		<input type="text" name="address" placeholder="Insert your Address">
 		<label id="email" for="email">Email</label>
 		<input type="text" name="email" placeholder="Insert your name">
 		<br/>
 		<label id="phone" for="phone">Phone</label>
 		<input type="text" name="phone" placeholder="Insert your Phone Number">
 		<label id="ccard" for="ccard">Credit Card</label>
 		<input type="text" name="ccard" placeholder="Insert your Credit Card Number">
 		<!-- Delivery Extra -->
 		<p>Special Delivery Instructions</p>
 		<textarea id="body" name="body" rows="7" cols="50" placeholder="insert info here"></textarea>
		<br/>
		<button type="submit">Order</button>
 	</form>
 </body>
 </html>