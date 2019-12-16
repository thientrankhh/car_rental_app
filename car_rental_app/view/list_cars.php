<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			
		</style>
	</head>
	<body>
		<ul class="pager">
			<li><a href="?controller=c_car&action=show_list_cars">Home</a></li>
			<li><a href="?controller=c_rental&action=add_rental_records">Add Rental records</a></li>
			<li><a href="?controller=c_rental&action=list_all_rental_records">List Rental records</a></li>
		</ul>

		<div class="container">
			<h1 class="text-center">List All Car</h1>
			<div class="table-responsive">
				<table class="table table-hover btn-success">
					<thead>
						<tr>
							<th>car_reg_no</th>
							<th>category</th>
							<th>Brand</th>
							<th>daily_rate</th>
							<th>View Details</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($list_cars as $key => $value):?>
						<tr>
							<td><?php echo $value['car_reg_no'] ?></td>
							<td><?php echo $value['category'] ?></td>
							<td><?php echo $value['brand'] ?></td>
							<td><?php echo $value['daily_rate'] ?></td>
							<td><a href="?controller=c_rental&action=list_rental_records&car_reg_no=<?php echo $value['car_reg_no'] ?>">View detail</a></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>