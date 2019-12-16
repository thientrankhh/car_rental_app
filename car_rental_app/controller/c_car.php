<?php 
	include_once('model/car.php'); 
	include_once('model/customer.php');
	include_once('model/car_rental.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = 'show_list_cars';
		}
	}

	switch ($action) {
		case 'show_list_cars':
			$list_cars = CarDB::get_all_cars();
			include('view/list_cars.php');
			break;
		
		default:
			# code...
			break;
	}

 ?>