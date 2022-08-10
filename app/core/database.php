<?php

class Database {
	private function connect() {
		$str = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		return new PDO($str,DBUSER,DBPASS);

	}

	public function query() {
		$con = $this->connect();
	}
}