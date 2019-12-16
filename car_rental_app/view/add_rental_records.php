<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<ul class="pager">
			<li><a href="?controller=c_car&action=show_list_cars">Home</a></li>
			<li><a href="?controller=c_car&action=add_rental_records">Add Rental records</a></li>
			<li><a href="?controller=c_rental&action=list_all_rental_records">List Rental records</a></li>
		</ul>

		<form action="" method="POST" role="form">
			<legend><h2>Add Rental records</h2></legend>
		
			<div class="form-group">
				<!-- <label for="rental_id">rental_id</label>
				<input type="text" class="form-control" id="rental_id" name="rental_id" placeholder="Enter rental_id"> -->

				<label for="rental_id">	car_reg_no</label>
				<input type="text" class="form-control" id="car_reg_no" name="car_reg_no" placeholder="Enter car_reg_no">

				<label for="rental_id">	customer_id</label>
				<input type="text" class="form-control" id="customer_id" name="customer_id" placeholder="Enter customer_id">

				<label for="rental_id">	start_date</label>
				<input type="text" class="form-control" id="start_date" name="start_date" placeholder="Enter start_date">

				<label for="rental_id">	end_date</label>
				<input type="text" class="form-control" id="end_date" name="end_date" placeholder="Enter end_date">

				<label for="rental_id">	lastUpdated</label>
				<input type="text" class="form-control" id="lastUpdated" name="lastUpdated" placeholder="Enter lastUpdated">
			</div>
		
			
		
			<button type="submit" name="action" value="save_new_rental_record" class="btn btn-primary">Add</button>
		</form>

			<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>