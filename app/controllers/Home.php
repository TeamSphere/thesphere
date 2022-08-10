<?php

class Home {
	public function index() {
		echo "home view page";
	}

	public function edit() {
		echo "home editing";
	}

	public function delete($id,$id2,$id3 = null) {
		echo "home delete ".$id3;
	}
}