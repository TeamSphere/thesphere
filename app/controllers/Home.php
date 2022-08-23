<?php

class Home extends Controller {

	public function index() {
		session_start();
		$data['title'] = "Home";

		$this->view('home',$data);

	}
}