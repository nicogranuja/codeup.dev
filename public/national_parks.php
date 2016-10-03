<?php
	
	define('DB_HOST','127.0.0.1');
	define('DB_NAME', 'parks_db');
	define('DB_USER', 'parks_user');
	define('DB_PASS', 'codeup');
	//require_once '../db_connect.php';
	require_once '../Model1.php';
	require_once '../Input.php';
	
	class Park extends Model{
		function getRowsNum(){
			$query = "SELECT * FROM national_parks";
			$stmt = parent::$dbc->prepare($query);
			$stmt->execute();
			return $stmt->rowCount();
		}
		function getArrayWithOffset(){
			$page = Input::has('page') ? Input::get('page') : $page=0;
			var_dump($page);
			$offset = ($page-1)*LIMIT < 0 ? 0 : ($page-1)*LIMIT;
			$content ="";
			
			$query = ("SELECT * FROM national_parks
			 	limit ".LIMIT." offset ".$offset." ;");
			$stmt = parent::$dbc->prepare($query);
			var_dump($stmt);
			$stmt->execute();
			$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $array;
		}
	}

	define("LIMIT", 4);

	$park = new Park();

	function createLi($rowsNum){
		var_dump($rowsNum);
		$pages = ceil(intval($rowsNum)/LIMIT);
		$li="";
		for ($i=1; $i <= $pages; $i++) { 
			$li .= "<li><a href='http://codeup.dev/national_parks.php?page=".$i."'>".$i."</a></li>";
		}
		return $li;
	}
	function validateData($park){
		
		$error=[];
		if( empty($_POST['name']) || empty($_POST['location']) || empty($_POST['date_established']) ||
			 empty($_POST['area_in_acres']) || empty($_POST['description'])){
			
			$error[] = "Check below for the empty inputs";
		}
		else{
			
			if( !is_numeric(Input::getString("area_in_acres")))
				$error [] = "Area must be a number";
			if ( ! preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",Input::getString("date_established")))
				$error [] = "Date format not valid";
			// else if(is_numeric(Input::getNumber("area_in_acres")) 
			// 	&& preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",Input::getString("date_established"))){
				
				try{
					$name = strip_tags(htmlentities(Input::getString('name', 2, 50)));
				}catch(LengthException $e){
					$error[] = "The length in name was out of range (2-50)";
				}catch(OutOfRangeException $e){
					$error[] = "The key was not set";
				}
				catch(InvalidArgumentException $e){
					$error[] = "Invalid argument";
				}

				try{
				$location = strip_tags(htmlentities(Input::getString('location',3,50)));
				}catch(LengthException $e){
					$error[] = "The length in location was out of range(3-50)";
				}catch(OutOfRangeException $e){
					$error[] = "The key was not set";
				}
				catch(InvalidArgumentException $e){
					$error[] = "Invalid argument";
				}

				try{
					$date_established = strip_tags(htmlentities(Input::getDate('date_established')));
					var_dump(Input::getDate('date_established'));
				}catch(DateRangeException $e){
					$error[]= $e->getMessage();
				}
				catch(Exception $e){
					$error[] = $e->getMessage();
				}

				try{
					$area_in_acres = strip_tags(htmlentities(Input::getNumber('area_in_acres')));
				}catch(LengthException $e){
					$error[] = "The length in area was out of range (2-50)";
				}catch(OutOfRangeException $e){
					$error[] = "The key was not set for area";
				}
				catch(InvalidArgumentException $e){
					$error[] = "Invalid argument in area";
				}
				catch(Exception $e){
					$error[] = $e->getMessage();
				}

				try{
					$description = strip_tags(htmlentities(Input::getString('description',5,50000000)));
				}catch(LengthException $e){
					$error[] = "The length in description was out of range (5-100)";
				}catch(OutOfRangeException $e){
					$error[] = "The key was not set";
				}
				catch(InvalidArgumentException $e){
					$error[] = "Invalid argument";
				}
				catch(Exception $e){
					$error[] = $e->getMessage();
				}

				if (empty($error)){
					// $query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, 
					// 	:date_established, :area_in_acres, :description)';
					// $stmt = $dbc->prepare($query);

					// $stmt->bindValue(':name', $name ,PDO::PARAM_STR);
					// $stmt->bindValue(':location', $location ,PDO::PARAM_STR);
					// $stmt->bindValue(':date_established',$date_established,PDO::PARAM_STR);
					// $stmt->bindValue(':area_in_acres', $area_in_acres ,PDO::PARAM_STR);
					// $stmt->bindValue(':description', "The park ".$name. " is located in ".$location.", and has ". $area_in_acres." acres"
					// 	,PDO::PARAM_STR);

					// $stmt->execute();
					$park->name = $name;
					$park->location = $location;
					$park->date_established = $date_established;
					$park->area_in_acres = $area_in_acres;
					$park->description = "The park ".$name. " is located in ".$location.", and has ". $area_in_acres." acres";

					$park->save('national_parks');

					$error[] = "Record Added";
				}
			// }
			return $error;
		}
	}
	function previousWebPage($rowsNum){
		$maxPage = ceil(intval($rowsNum)/LIMIT);
		// if(!isset($_GET['page']))
		if( ! Input::has('page'))
			return "http://codeup.dev/national_parks.php?page=".$maxPage;
		else{
			// $currentPage = $_GET['page'];
			try{
				$currentPage = Input::getString('page');
				if(($currentPage-1) > 0)
					return "http://codeup.dev/national_parks.php?page=".--$currentPage;
				else
					return "http://codeup.dev/national_parks.php";
			} catch(Exception $e){

			}
		}
	}
	function advanceWebPage($rowsNum){
		// if(!isset($_GET['page']))
		if(! Input::has('page'))
			return "http://codeup.dev/national_parks.php?page=1";
		else{
			$maxPage = ceil(intval($rowsNum)/LIMIT);
			// $currentPage = $_GET['page'];
			try{
				$currentPage = Input::getString('page');
				if(($currentPage+1) <= $maxPage)
					return "http://codeup.dev/national_parks.php?page=".++$currentPage;
				else
					return "http://codeup.dev/national_parks.php";
			} catch(Exception $e){
				
			}
		}
	}
	// function getRowsNum($dbc){
	// 	$query = "SELECT * FROM national_parks";
	// 	$stmt = $dbc->prepare($query);
	// 	$stmt->execute();
	// 	return $stmt->rowCount();
	// } 

	function getParks($dbc){
		$query = "SELECT * FROM national_parks";
		$stmt = $dbc->prepare($query);
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}

	function printAll($park, $rows, $pagination=false){
		$content="";
		if(!$pagination){
			foreach ($rows as $row) {
				$content .= "<tr>";
				$content .= "<td>".$row['name']."</td>";
				$content .= "<td>".$row['location']."</td>";
				$content .= "<td>".$row['date_established']."</td>";
				$content .= "<td>".$row['area_in_acres']."</td>";
				$content .= "<td>".$row['description']."</td>";
				$content .= "</tr>";
			}
		}
		else{
			// $page = $_GET['page'];
			// $page = Input::getString('page');
			// $offset = ($page-1)*LIMIT;
			// $content ="";
			
			// $query = ("SELECT * FROM national_parks
			//  	limit ".LIMIT." offset ".$offset." ;");
			// $stmt = $dbc->prepare($query);
			// $stmt->execute();
			// $array = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$array = $park->getArrayWithOffset();

			foreach ($array as $row) {
				$content .= "<tr>";
				$content .= "<td>".$row['name']."</td>";
				$content .= "<td>".$row['location']."</td>";
				$content .= "<td>".$row['date_established']."</td>";
				$content .= "<td>".$row['area_in_acres']."</td>";
				$content .= "<td>".$row['description']."</td>";
				$content .= "</tr>";
			}

		}

		return $content;
	}
	function isValid($value, $name){
		$answer = true;
		if($name == "areaValue" && !is_numeric($value)){
			return false;
		}
		return $answer;
	}

	function pageController($park){
	 	$data ['error'] = "";

	 	// $data ['rowsNum'] = getRowsNum($dbc);
	 	$data ['rowsNum'] = $park->getRowsNum();

	 	$data ['webPageNext'] = advanceWebPage($data['rowsNum']);
	 	$data['webPagePrev'] = previousWebPage($data['rowsNum']);
	 	if(!empty($_POST))
	 		$data['error'] = validateData($park);
	 	$data['li'] = createLi($data['rowsNum']);
	 	$data['action'] = "http://codeup.dev/national_parks.php?page=".ceil($data['rowsNum']/ LIMIT);
	 	if(isset($_GET['page']))
			// $data['table']  = printAll($park, getParks($dbc), true);
	 		$data['table']  = printAll($park, $park->showAll('national_parks'), true);	 	
	 	
		else{
			// $data['table'] = printAll($park, getParks($dbc));
			// $_GET['page']=0;
			$data['table']  = printAll($park, $park->showAll('national_parks'), true);	 	
		}

		$arr = [Input::get('name'),Input::get('location'),Input::get('date_established'),Input::get('area_in_acres'),
			Input::get('description')];
		$arrNames = ["nameValue","locationValue","dateValue","areaValue","descriptionValue"];
		for ($i=0; $i < count($arr); $i++) { 
			if(isset($arr[$i]) && isValid($arr[$i], $arrNames[$i])){
				$data[$arrNames[$i]] = trim($arr[$i]);
			}
			else{
				$data[$arrNames[$i]] = "";
			}
		}

	 	return $data;
	 }

	// extract(pageController($dbc));
	 extract(pageController($park));
?>


<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
    	input{
    		width: 40%;
    	}	
    </style>
</head>
<body>
	<div class="container">
		<nav aria-label="Page navigation">
		  <ul class="pagination">
			<li>
		      <a href="<?=$webPagePrev ?>" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		  	 <li><a href="http://codeup.dev/national_parks.php">All</a></li>
		    <?=$li?>
		    <li>
			    <a href="<?=$webPageNext ?>" aria-label="Next">
		        	<span aria-hidden="true">&raquo;</span>
		      	</a>
		    </li>    	
		  </ul>
		</nav>

		<table class="table table-striped">
			<tr class="text-center">
				<th>Name</th><th>Location</th><th>Date Established</th><th>Acres</th><th class="text-center">Description</th>
			</tr>
			<?=$table?>
		</table>
		<h4>Total of Rows: <?= $rowsNum ?></h4>

		<form method="POST" action="<?=htmlspecialchars($action)?>">
			<div class="form-group" >
				<p id="error" hidden>
					Empty fields below
				</p>
				<p style="color:red;">
					<?php
						// var_dump($error);
						if(! is_string($error)){
							foreach($error as $singleError)
							{
								echo $singleError."<br>";
							}
						}
					?>	
				</p>
				<label id="name">Name</label>
				<input class="form-control" type="" name="name" value="<?=$nameValue?>" placeholder="Name" id="nameInput">
		
				<label id="location">Location</label>
				<input class="form-control" type="" name="location" value="<?=$locationValue?>" placeholder="Location" id="locationInput">

				<label id="date">Date Established</label>
				<input class="form-control" type="date" name="date_established" value="<?=$dateValue?>" placeholder="Date Established (YYYY-MM-DD)" id="dateInput" >

				<label id="area">Area in Acres</label>
				<input class="form-control" type="" name="area_in_acres" value="<?=$areaValue?>" placeholder="Area in Acres" id="areaInput">

				<label id="description">Description</label>

				<textarea name="description" class="form-control" id="descriptionInput" value=""><?=$descriptionValue?></textarea>
				<br>
				<button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
			</div>
		</form>
	</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<!-- <script>
	$(document).ready(function(){
		var $btnSubmit = $('#submitBtn');
		var $name = $('#name');
		var $location = $('#location');
		var $date = $('#date');
		var $area = $('#area');
		var $description = $('#description');

		var $nameInput = $('#nameInput');
		var $locationInput = $('#locationInput');
		var $dateInput = $('#dateInput');
		var $areaInput = $('#areaInput');
		var $descriptionInput = $('#descriptionInput');

		$btnSubmit.on('click', function(e){
			var array = [$nameInput,$locationInput,$dateInput,$areaInput,$descriptionInput];
			var array1 = [$name,$location,$date,$area,$description];
			// e.preventDefault();
			
			for(var i=0; i < array.length; i++){
				if( !array[i].val()){
					array1[i].css('color','red');
					$('#error').show().css('color','red');
					e.preventDefault();
				}
				else{
					array1[i].css('color','black');
				}
			}
			//it doesnt work
			console.log($areaInput.val());
			if(isNan(array[3].val())){
				// e.preventDefault();
				console.log("not a number");
				$('#error').show().css('color','red');
				$area.append("*has to be a number");
			}
		});
	});

</script>	 -->
</body>
</html>


