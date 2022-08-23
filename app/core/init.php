<?php

// reduces auto loader
spl_autoload_register(function($class_name) {
	require "../app/models/" .$class_name . ".php";
});

//rquire main files
require "config.php";
require "functions.php";
require "database.php";
require "model.php";
require "controller.php";
require "app.php";