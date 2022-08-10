<?php

class Database {
	private function connect() {
		$str = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		return new PDO($str,DBUSER,DBPASS);

	}

	public function query($query,$data = [],$type = 'object') {
		$con = $this->connect();
		$stm = $con->prepare($query);
		if ($stm) {

			$check = $stm->execute($data);

			if($check) {

				$type = PDO::FETCH_OBJ;
				if ($type != 'object') {
					$type = PDO::FETCH_ASSOC;
				}

				$result = $stm->fetchAll($type);

				if ($result && count($result) >0) {
					return $result;
				}
			}
		}

		return false;
	}
	
	public function create_tables() {
		//users table
		$query = "

			CREATE TABLE IF NOT EXISTS `users` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`email` varchar(100) NOT NULL,
				`password` varchar(255) NOT NULL,
				`date` date DEFAULT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

		";

		$this->query($query);
		}
	}
