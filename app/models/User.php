<?php

class User {

	protected $error = [];
	protected $table = "users"

	public function validate($data) {

		$this->errors = [];
		
		if(empty($this->errors)) {
			return true;
		}
		return false;

	}
}