<?php

class Home extends Controller {

	public function index() {
		
		$this->view('home');

	}
	public function edit() {
		echo "home editing ";
	}
	public function delete() {
		echo "home delete ";
	}
}