<?php
    class Controller_Cpanel extends Controller{

        function __construct(){
			$this->model = new Model_Cpanel();
			$this->view = new View();
		}

		function action_index(){
            echo $action = Route::$aname;
            $data = $this->model->get_data();
            $this->view->generate('cpanel_view.php', 'template_view.php', $data);
		}
        function action_menu(){
        	$data = $this->model->get_data();
        	$this->view->generate('cpanel_view.php', 'template_view.php' ,$data);
        }
	}