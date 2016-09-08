<?php 
	
	function pageController(){
	
		$data = [];
		

    	$counter = isset($_GET['count']) ? $_GET['count'] : 0;
		// $counter =0;
    	
    	$url = '/counter.php?count=';

    	$data  = ['count' => $counter, 'url'=> $url];
    	var_dump($data);
    	return $data;
	}
	// var_dump($data['getData']);
	extract(pageController());
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<title>Counter</title>
 </head>
 <body>
	 <div class="container">
	 	<form class="form" action="/counter.php">
            <div class="form-group">
                <p>Counter: <?= $count ?></p>
	 			<a href="<?php echo $url?><?= $count +1 ; ?>" > >Up</a>
	 			<a href= "<?php echo $url?><?= $count -1 ; ?>"  >Down</a>
	 			<!-- <input class="btn btn-primary btn-block" type="submit"> -->
            </div>
            <p>
            	<?php var_dump($count);?>
            </p>
        </form>

	 		
	 	
	 </div>
 </body>
 </html>