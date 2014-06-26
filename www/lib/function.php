<?php
	function category($link, $content){
		$result = "<a href='/portfolio'>".$link."</a>\n".$content;
		return $result;
	}
	
	function menuFu($arr = array()){
		$routes = explode('/', $_SERVER['REQUEST_URI']); 				
				// получаем имя контроллера
				if(!empty($routes[1])){	
					$controller_name = $routes[1];			
				}
		foreach($arr as $value){			
			foreach($value as $key => $val){
				$aliasMenu = $val['alias'];
				$nameMenu = $val['name_menu'];				
				if($aliasMenu == $controller_name){
					$result .= "<li class = 'active'><a href=".$aliasMenu.">".$nameMenu."</a></li>";
				}else{
					$result .= "<li><a href=".$aliasMenu.">".$nameMenu."</a></li>";
				}								 
			}
		}
		return $result;
	}