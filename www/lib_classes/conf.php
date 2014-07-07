<?php
	ini_set('display_errors', 1);
	define('PS', PATH_SEPARATOR);
	define('DS', DIRECTORY_SEPARATOR);
	set_include_path(get_include_path()
    . PS ."application ". DS ." core". DS ."route.php"
	. PS ."application ". DS ." core". DS ."controller.php"
	. PS ."application ". DS ." core". DS ."model.php"
	. PS ."application ". DS ." core". DS ."view_main.php"
	. PS ."lib_classes ". DS ."data_class.php");
function core($class){
    @include 'application/core/'.$class.'.php';
}
function lib($class){
    @include 'lib_classes/'.$class.'.php';
}
spl_autoload_register('core');
spl_autoload_register('lib');
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