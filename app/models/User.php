<?php

class User {

	public $error = [];
	protected $table = "users";

	protected $allowedColumns = [
		
		'email',
		'firstname',
		'lastname',
		'password',
		'role',
		'date',

	];

	public function validate($data) {

		$this->errors = [];

		if(empty($data['firstname'])) {
			$this->errors['firstname'] = "A first name is required";
		}

		if(empty($data['lastname'])) {
			$this->errors['lastname'] = "A last name is required";
		}

		if(empty($data['email'])) {
			$this->errors['emaile'] = "An email name is required";
		}

		if(empty($data['password'])) {
			$this->errors['password'] = "A password is required";
		}

		if($data['password'] !== $data['retype_password']) {
			$this->errors['password'] = "Passwords do not match";
		}

		if(empty($data['terms'])) {
			$this->errors['terms'] = "Please accept the terms and conditions";
		}
		
		if(empty($this->errors)) {
			return true;
		}
		return false;

	}

	public function insert($data) {
		// remove unwanted columns
		if(!empty($this->allowedColumns)) {
			foreach ($data as $key => $value) {
				if (!in_array($key, $this->allowedColumns)) {
					unset($data[$key]);
				}
			}
		}

		$keys = array_keys($data);
		$values = array_values($data);
		$query = "insert into users ";
		$query.= "(".implode(",",$keys) .") values (:".implode(",:",$keys) .")";
		
		$db = new Database();
		$db->query($query,$data);
	}
}