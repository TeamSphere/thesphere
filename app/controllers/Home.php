<?php

class Home extends Controller {

	public function index() {

		$db = new Database();
		$res = $db->query("select * from users");
		
		$data['title'] = "Home";

		$this->view('home',$data);

	}
}