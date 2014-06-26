<?php
    class Controller_Menu extends Controller{
		function __construct(){
			$this->model = new Model_Menu();
			$this->view = new View();
		}

		function action_index(){
			$data = $this->model->get_data();
			$this->view->generate('cpanel_view.php', 'template_view.php', $data);
		}
	}