<?php 
	$lifetime= 2*24*3600;
	session_set_cookie_params($lifetime,"/");
	session_start();

	include_once('config/Database.php');

	$controller = filter_input(INPUT_POST, 'controller');
	if(empty($controller)){
		$controller = filter_input(INPUT_GET, 'controller');
		if(empty($controller)){
			$controller = 'c_car';
		}
	}

	switch ($controller) {
		case 'c_car':
			include('controller/c_car.php');
			break;
		case 'c_rental':
			include('controller/c_rental.php');
			break;	
		default:
			# code...
			break;
	}	
 ?>