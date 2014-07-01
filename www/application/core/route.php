<?php
	class Route{
		static public $db;
        static function run(){
            // Метод который проверяет какой контроллер запустить. Проверка по ( alias ) в таблице
            $controller_name = self::getController();
			// Метод который проверяет ( ACTION )
            $action_name = self::getAction();

			// добавляем префиксы
			$model_name = 'Model_'.$controller_name;
			$controller_name = 'Controller_'.$controller_name;
			$action_name = 'action_'.$action_name;			
			
			// подцепляем файл с классом модели (файла модели может и не быть)
			$model_file = strtolower($model_name).'.php';
			$model_path = "application/model/".$model_file;
			if(file_exists($model_path)){
				include "application/model/".$model_file;
			}

			// подцепляем файл с классом контроллера
			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "application/controller/".$controller_file;
			if(file_exists($controller_path)){
				include "application/controller/".$controller_file;
			}else{
				/*
				правильно было бы кинуть здесь исключение,
				но для упрощения сразу сделаем редирект на страницу 404
				*/
				self::ErrorPage404();
			}
			
			$controller = new $controller_name;
			$action = $action_name;
			
			if(method_exists($controller, $action)){
				// вызываем действие контроллера
				$controller->$action();
			}
		}
		
		static function ErrorController(){
			echo 'ErrorController';			
		}
		static function ErrorAction(){
			echo 'ErrorAction';
		}
		static function ErrorPage404(){
			//$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			//header('HTTP/1.1 404 Not Found');
			//header("Status: 404 Not Found");
			//header('Location:'.$host.'404');
            echo 'Error404';
		}
        /********************************** Метод проверки ( alias ) для запуска контроллера *******************************/
        public function getController(){
            self::$db = Db_ext::getInstance();
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            if(!empty($routes[1])){
                $controller_name = $routes[1];
            }else{
                $controller_name = 'Main';
            }
            $rezult = self::$db->query("SELECT c.prefix FROM menucp m, controller c WHERE m.id_controller = c.id and m.alias = '$controller_name'");
            $prefixController = $rezult->fetchAll(PDO::FETCH_ASSOC);
            if($prefixController[0]['prefix']){
                return $prefixController[0]['prefix'];
            }else{
                return $controller_name;
            }
        }
        /****************************************************************************************************************** */
        /********************************** Метод проверки ( action ) для запуска акшена ************************************/
        public function getAction(){
            $action_name = 'main';
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            // получаем имя экшена
            if (!empty($routes[2])){
                $action_name = $routes[2];
            }
            return $action_name;
        }
        /****************************************************************************************************************** */
	}
?>