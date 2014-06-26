<?php
	class Route{
		static function run(){
			// ���������� � �������� �� ���������
			$controller_name = 'Main';
			$action_name = 'main';
			
			$routes = explode('/', $_SERVER['REQUEST_URI']);
			
			// �������� ��� �����������
			if(!empty($routes[1])){	
				$controller_name = $routes[1];			
			}
        
			// �������� ��� ������
			if ( !empty($routes[2]) ){
				$action_name = $routes[2];			
			}

			// ��������� ��������
			$model_name = 'Model_'.$controller_name;
			$controller_name = 'Controller_'.$controller_name;
			$action_name = 'action_'.$action_name;			
			
			// ���������� ���� � ������� ������ (����� ������ ����� � �� ����)
			$model_file = strtolower($model_name).'.php';
			$model_path = "application/core/".$model_file;
			if(file_exists($model_path)){
				include "application/core/".$model_file;
			}

			// ���������� ���� � ������� �����������
			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "application/core/".$controller_file;
			if(file_exists($controller_path)){
				include "application/core/".$controller_file;
			}else{
				/*
				��������� ���� �� ������ ����� ����������,
				�� ��� ��������� ����� ������� �������� �� �������� 404
				*/
				self::ErrorPage404(1);
			}
			
			$controller = new $controller_name;
			$action = $action_name;
			
			if(method_exists($controller, $action)){
				// �������� �������� �����������
				$controller->$action();
			}else{
				// ����� ����� �������� ���� �� ������ ����������
				self::ErrorPage404(2);
			}
		}
		
		
		
		
		
		
		static function ErrorController(){
			echo 'ErrorController';			
		}
		static function ErrorAction(){
			echo 'ErrorAction';
		}
		static function ErrorPage404($num){
			//$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
			//header('HTTP/1.1 404 Not Found');
			//header("Status: 404 Not Found");
			//header('Location:'.$host.'404');
			if($num == 1){
				echo 'ErrorPage404   -    1';
			}else{
				echo 'ErrorPage404   -    2';
			}
		}
	}
?>