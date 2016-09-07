<?php 
	function randomName(){
		$adjectives =["ambitious", "admirable", "alienated" ,"alive",  "altruistic", 
		"abandoned" ,"able", "absolute", "adorable" , "adventurous"];
		$nouns=["ball","bat","bed","book","boy","bun","can","cake","cap","car"];
		$rand1 = rand(0,9);
		$rand2 = rand(0,9);
		return $adjectives[$rand1] ." ". $nouns[$rand2];
	}

	// var_dump(randomName($adjectives, $nouns));
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Random names Generator</title>
</head>
<body>
	<h1>
		Name generated
	</h1>
	<p> 
		<?php 
			echo randomName();
		 ?>
	</p>
</body>
</html>