<?php 
	function inputHas($key){
		return isset($_REQUEST[$key]) ? true : false;
	}

	function inputGet($key){
		return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
	}

	function escape($input){
		return htmlspecialchars(strip_tags($input));
	}


 ?>