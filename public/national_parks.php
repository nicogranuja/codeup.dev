<?php
	
	define('DB_HOST','127.0.0.1');
	define('DB_NAME', 'parks_db');
	define('DB_USER', 'parks_user');
	define('DB_PASS', 'codeup');
	require_once '../db_connect.php';


	function previousWebPage(){
		if(!isset($_GET['page']))
			return "http://codeup.dev/national_parks.php?page=15";
		else{
			$currentPage = $_GET['page'];
			if(($currentPage-1) > 0 && ($currentPage-1) <= 15)
				return "http://codeup.dev/national_parks.php?page=".--$currentPage;
			else
				return "http://codeup.dev/national_parks.php";
		}
	}
	function advanceWebPage(){
		if(!isset($_GET['page']))
			return "http://codeup.dev/national_parks.php?page=1";
		else{
			
			$currentPage = $_GET['page'];
			if(($currentPage+1) <= 15)
				return "http://codeup.dev/national_parks.php?page=".++$currentPage;
			else
				return "http://codeup.dev/national_parks.php";
		}
	}
	function getRowsNum($dbc){
		$stmt = $dbc->query('SELECT * FROM national_parks');
		return "Total of Rows: " . $stmt->rowCount() . PHP_EOL;
	} 

	function getParks($dbc){
		$stm = $dbc->query("SELECT * FROM national_parks;");
		$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
		return $rows;
	}

	function printAll($dbc, $rows, $pagination=false){
		$limit = 4;
		$content="";
		if(!$pagination){
			foreach ($rows as $row) {
				$content .= "<tr>";
				$content .= "<td>".$row['NAME']."</td>";
				$content .= "<td>".$row['location']."</td>";
				$content .= "<td>".$row['date_established']."</td>";
				$content .= "<td>".$row['area_in_acres']."</td>";
				$content .= "</tr>";
			}
		}
		else{
			$page = $_GET['page'];
			$offset = ($page-1)*$limit;
			$content ="";
			$partialContent = $dbc->query("SELECT * FROM national_parks
				limit ".$limit." offset ".$offset." ;");

			$array = $partialContent->fetchAll(PDO::FETCH_ASSOC);
			foreach ($array as $row) {
				$content .= "<tr>";
				$content .= "<td>".$row['NAME']."</td>";
				$content .= "<td>".$row['location']."</td>";
				$content .= "<td>".$row['date_established']."</td>";
				$content .= "<td>".$row['area_in_acres']."</td>";
				$content .= "</tr>";
			}

		}

		return $content;
	}

	 function pageController($dbc){
	 	$data ['rowsNum'] = getRowsNum($dbc);
	 	$data ['webPageNext'] = advanceWebPage();
	 	$data['webPagePrev'] = previousWebPage();
	 	if(isset($_GET['page']))
			$data['table']  = printAll($dbc, getParks($dbc), true);
		else{
			$data['table'] = printAll($dbc, getParks($dbc));
			$_GET['page']=0;
		}
	 	return $data;
	 }
	extract(pageController($dbc));
?>


<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
		    <li><a href="http://codeup.dev/national_parks.php?page=1">1</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=2">2</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=3">3</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=4">4</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=5">5</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=6">6</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=7">7</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=8">8</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=9">9</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=10">10</a></li>
		     <li><a href="http://codeup.dev/national_parks.php?page=11">11</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=12">12</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=13">13</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=14">14</a></li>
		    <li><a href="http://codeup.dev/national_parks.php?page=15">15</a></li>
		    <li>
			    <a href="<?=$webPageNext ?>" aria-label="Next">
		        	<span aria-hidden="true">&raquo;</span>
		      	</a>
		    </li>
		    	
		  </ul>
		</nav>

		<table class="table table-striped">
			<tr>
				<th>Name</th><th>Location</th><th>Date Established</th><th>Acres</th>
			</tr>
			<?=$table?>
		</table>
		<h4><?= $rowsNum ?></h4>
		
		
	</div>
</body>
</html>