<?php
	ini_set('display_errors', 1);
	define('PS', PATH_SEPARATOR);
	define('DS', DIRECTORY_SEPARATOR);
	define('DB_USER', '2zdizayn');
	define('DB_PASS', 'konstantin82');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'mybase');
	set_include_path(get_include_path(). PS ."application ". DS ." core". DS ."route.php"									   
									   . PS ."application ". DS ." core". DS ."controller_main.php"
									   . PS ."application ". DS ." core". DS ."model_main.php"
									   . PS ."application ". DS ." core". DS ."view_main.php");
	require_once 'application/core/route.php';
	//require_once 'application/core/controller_main.php';
	//require_once 'application/core/model_main.php';	
	require_once 'application/core/view_main.php';	
?>