<?php
    class Action extends Controller_Cpanel{
		public $action_names;
        function __construct(){
			$this->model = new Model_Main();
			$this->view = new View();
		}

        public function action_index(){}
        public function A(){
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            // получаем имя экшена
                    if ( !empty($routes[3]) ){
                        $this->action_name = $routes[3];
                    }
        }
	}
