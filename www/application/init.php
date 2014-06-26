<?php
	require_once 'core/model.php';
	require_once 'core/view.php';
	require_once 'core/controller.php';
	require_once 'core/route.php';
	require_once 'class/menu.class.php';
	define('DB_USER', '2zdizayn');
	define('DB_PASS', 'konstantin82');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'mybase');		
	Route::start(); // запускаем маршрутизатор
?>