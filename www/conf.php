<?php
	ini_set('display_errors', 1);
	define('PS', PATH_SEPARATOR);
	define('DS', DIRECTORY_SEPARATOR);
	set_include_path(get_include_path(). PS ."application ". DS ." core". DS ."route.php"
									   . PS ."application ". DS ." core". DS ."controller.php"
									   . PS ."application ". DS ." core". DS ."model.php"
									   . PS ."application ". DS ." core". DS ."view_main.php"
									   . PS ."lib_classes ". DS ."data_class.php");
	require_once 'application/core/route.php';
	require_once 'application/core/controller.php';
	require_once 'application/core/model.php';
	require_once 'application/core/view_main.php';
    require_once 'lib_classes/data_class.php';
    class Db_ext {
        protected static $dsn = 'mysql:dbname=mybase;host=localhost';
        protected static $user = '2zdizayn';
        protected static $password = 'konstantin82';
        protected static $_instance;
            public static function getInstance(){
                if(self::$_instance){
                    return self::$_instance;
                }else{
                    try{
                    return self::$_instance = new PDO(self::$dsn,self::$user,self::$password);
                    }catch(Exception $error){
                        echo $error->getCode().'<br>';
                        echo $error->getMessage().'<br>';
                        echo $error->getLine().'<br>';
                    }
                }
            }
    }
?>