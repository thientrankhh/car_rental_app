<?php 
	class CarDB{
		public static function get_all_cars(){
			$query = "SELECT * FROM car";
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

	}

 ?>