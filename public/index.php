<?php

function show($stuff) {
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

class App {
	
	protected $controller = '_404';
	protected $method = 'index';

	function __construct() {
		
		$arr = $this->getURL();


		$filename = "../app/controllers/".ucfirst($arr[0]).".php";
		if(file_exists($filename)) {
			require $filename;
			$this->controller = $arr[0];
		} else {
			require "../app/controllers/".$this->controller.".php";
		}

		$mycontroller = new $this->controller();
		$mymethod = $arr[1] ?? $this->method;

		if(method_exists($mycontroller, strtolower($mymethod))) {
			
			$this->method = strtolower($mymethod);

		} 
		show($arr);
		call_user_func_array([$mycontroller,$this->method], $arr);


	}

	private function getURL() {
		$url = $_GET['url'] ?? 'home';
		$url = filter_var($url,FILTER_SANITIZE_URL);
		$arr = explode("/", $url);
		return $arr;
	}
}

$app = new App();