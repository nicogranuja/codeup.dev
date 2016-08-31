<?php
	echo -20 + -22 .PHP_EOL;
	echo 16 - 42 .PHP_EOL;
	echo 6 * 4 .PHP_EOL;
	echo 3 % 4 .PHP_EOL;

	$number = 10;
	$number *= 3;
	echo $number	 .PHP_EOL;
////////////
	$item1 = 5;
	echo $item1 .PHP_EOL;
	$item2 = $item1;
	echo $item1 .PHP_EOL;
	$item1 = 10;
	$item2 = &$item1;
	echo $item2 .PHP_EOL;
//////////////////
	var_dump('test' == 'test');

	var_dump('test' == 'Test');

	var_dump(100 > 5);

	var_dump('25' === 25);

	var_dump('25' !== 25);
///////////////////
	$a = 10;

	echo ++$a;

	echo $a++;

	echo $a;

	$b = 20;

	echo --$b;

	echo $b--;

	echo $b. PHP_EOL;
//////////////////
	$x = 0;
	$y = 5;
	$z = 10;
	var_dump($x < ($y < $z));
	var_dump(($x > $y) < $z);
	var_dump($x > $y || $y < $z);
	var_dump($x > $y || !($y < $z));


?>