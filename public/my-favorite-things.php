<?php
	function pageController(){
		$data = array();
		$data['things'] =["food", "sleeping", "programming", "computers", "phones"];

		return $data;
	} 
	extract(pageController());
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>My favorite things</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>
			My favorite things
		</h1>
		 <table class="table-striped table">
		 	<thead>
		 		<tr>
		 			<th>My favorite things</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php foreach ($things as $thing): ?>
		 			<tr>
		 				<td><?= $thing ?></td>
		 			</tr>
		 		<?php endforeach; ?>
		 	</tbody>
		 </table>
	</div>
	
		
</body>
</html>