<?php 
	function randomName(){
		$adjectives =["ambitious", "admirable", "alienated" ,"alive",  "altruistic", 
		"abandoned" ,"able", "absolute", "adorable" , "adventurous"];
		$nouns=["ball","bat","bed","book","boy","bun","can","cake","cap","car"];
		$rand1 = rand(0,9);
		$rand2 = rand(0,9);
		return $adjectives[$rand1] ." ". $nouns[$rand2];
	}
	function getStyle(){
		$styles = ["bg-primary text-primary", "bg-success text-info", "bg-info text-warning", "bg-warning text-primary","bg-danger text-success", "bg-primary text-info", "bg-success text-warning", "bg-info text-warning", "bg-warning text-info","bg-danger text-primary"];
		$rand = rand(0,9);
		return $styles[$rand];
	}

	// var_dump(randomName($adjectives, $nouns));
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Random names Generator</title>
</head>
<body>
	<div class="container">
		<h1>
			Name generated
		</h1>
		<h3 class= <?php echo getStyle()?> > 
			<?php 
				echo randomName();
			 ?>
		</h3>
	</div>
</body>
</html>