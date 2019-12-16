<?php 
	include_once('model/car.php'); 
	include_once('model/customer.php');
	include_once('model/car_rental.php');

	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = 'list_rental_records';
		}
	}

	switch ($action) {
		case 'list_rental_records':
			$car_reg_no = filter_input(INPUT_GET, 'car_reg_no');
			$list_rentals = RentalDB::get_rental_by_car($car_reg_no);
			include('view/list_rentals.php');
			break;
		case 'add_rental_records':
			include('view/add_rental_records.php');
			break;
		case 'save_new_rental_record':
			$car_reg_no = filter_input(INPUT_POST,'car_reg_no');
			$customer_id = filter_input(INPUT_POST,'customer_id');
			$start_date = filter_input(INPUT_POST,'start_date');
			$end_date = filter_input(INPUT_POST,'end_date');
			$lastUpdated = filter_input(INPUT_POST,'lastUpdated');
			$check = RentalDB::check_rental($car_reg_no,$customer_id);
			if($check = true){
				RentalDB::add_rental_record($car_reg_no,$customer_id,$start_date,$end_date,$lastUpdated);
				$list_all_rental = RentalDB::get_all_rentals();
				include('view/shown_list_rental.php');
			}else {
				echo 'Error car_reg_no and customer_id';
				include('view/add_rental_records.php');
			}
				
			break;	
		case 'list_all_rental_records':
			$list_all_rental = RentalDB::get_all_rentals();
			include('view/shown_list_rental.php');
			break;
		case 'delete_rental':
			$id = filter_input(INPUT_GET,'id');
			RentalDB::delete_rental_by_id($id);
			$list_all_rental = RentalDB::get_all_rentals();
			include('view/shown_list_rental.php');
			break;		

		default:
			# code...
			break;
	}

 ?>