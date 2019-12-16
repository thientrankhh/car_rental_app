<?php 
	class RentalDB{
		public static function get_all_rentals(){
			$query = "SELECT * FROM rental_records";
			try {
				$db = Database::getDB();
				$statement = $db->prepare($query);
				$statement->execute();
				$result = $statement->fetchAll();
				$statement->closeCursor();		
				return $result;						
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
					echo "Error query statement: ".$error_message;		
			}
		}

		public static function get_rental_by_car($car_reg_no){
			$query = "SELECT r.rental_id, r.car_reg_no, cs.customer_id, cs.name, cs.address, cs.phone, c.category, c.brand, c.daily_rate, r.start_date,r.end_date, r.lastUpdated FROM rental_records r
					  		   INNER JOIN car c
					  		   			ON r.car_reg_no=c.car_reg_no
					  		   	INNER JOIN customers cs
					  		   			ON r.customer_id=cs.customer_id
					 WHERE r.car_reg_no=:car_reg_no";
			try {
				$db = Database::getDB();
				$statement = $db->prepare($query);
				$statement->bindParam(':car_reg_no',$car_reg_no);
				$statement->execute();
				$result = $statement->fetchAll();
				$statement->closeCursor();		
				return $result;						
			} catch (PDOException $e) {
				$error_message = $e->getMessage();
					echo "Error query statement: ".$error_message;		
			}
		}

		public static function add_rental_record($car_reg_no,$customer_id,$start_date,$end_date,$lastUpdated){
			$query = "INSERT INTO rental_records(car_reg_no,customer_id,start_date,end_date,lastUpdated) 
			VALUES(:car_reg_no, :customer_id, :start_date, :end_date, :lastUpdated)";

			try {
				$statement = Database::getDB() -> prepare($query);
				$statement -> bindValue('car_reg_no',$car_reg_no);
				$statement -> bindValue('customer_id',$customer_id);
				$statement -> bindValue('start_date',$start_date);
				$statement -> bindValue('end_date',$end_date);
				$statement -> bindValue('lastUpdated',$lastUpdated);
				$statement -> execute();
				$statement -> closeCursor();

			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error query statement: ".$error_message;
				include('view/add_rental_records.php');
			}

		}

		public static function check_rental($car_reg_no,$customer_id){
			$check = false;
			$list_cards = CarDB::get_all_cars();
			$list_customers = CustomerDB::get_all_customers();
			foreach ($list_cards as $key => $value) {
				foreach ($list_customers as $key => $value1) {
					if($value['car_reg_no'] == $car_reg_no && $value1['customer_id'] == $customer_id){
						$check = true;
						break;
					}else{
						$check = false;
						break;
					}
					return $check;
				}
			}
			
		}

		public static function delete_rental_by_id($id){
			$query = "DELETE FROM rental_records
					WHERE rental_id = :id";
			try {
				$statement = Database::getDB() -> prepare($query);
				$statement -> bindValue(':id',$id);
				$statement -> execute();
				
				$statement -> closeCursor();

			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Error query statement: ".$error_message;
			}		
		}

	}
 ?>