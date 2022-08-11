<?php

define('APP_NAME', 'The Sphere');
define('APP_DESC', 'Online Education');



if($_SERVER['SERVER_NAME'] == 'localhost') {
	//database config for localhost
	define('DBHOST','localhost');
	define('DBNAME', 'thesphere_db');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'localhost');

	//root path e.g. localhost
	define('ROOT', 'http://localhost/thesphere/public');

} else {
	//liveserver config
	define('DBHOST','localhost');
	define('DBNAME', 'thesphere_db');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'localhost');

	//root path e.g. thesphere.online

	define('ROOT', 'http://localhost/thesphere/public');
}