<?php
	echo "Hello from an external file!\n";
	// $array = array(1,2,3,4,5);
	$array = [1,2,3,4,5];
	var_dump($array);
	print_r($array);
	echo $array[3]. PHP_EOL;
	$person1 = ['name'=>'Joe', 'last'=>'Doe', 'email'=>'a.aol.com', 'phone'=>'2103405412'];
	$person2 = ['name'=>'Las', 'last'=>'Bob', 'email'=>'a.aol.com', 'phone'=>'2103405412'];
	$person3 = ['name'=>'Billy', 'last'=>'Jasen', 'email'=>'a.aol.com', 'phone'=>'2103405412'];
	$people = ['person1'=>$person1, 'person2'=>$person2, 'person3'=>$person3];
	var_dump($people);
	print_r($people);
?>