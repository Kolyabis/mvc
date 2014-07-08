<?php
	class Controller_main extends Controller{
		public $model, $view;
        public $data_arr;
		public function __construct(){
			$this->model = new Model_Main();
			$this->view = new View_Main();
            $this->data_arr = new data_class();
		}
		
        public function action_main(){
            $data_menu = $this->model->get_menucp();
            $data_content = $this->model->get_menu();
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data_menu, $data_content);
		}
        public function action_category(){
            $data_menu = $this->model->get_menucp();
            $data_content = $this->model->get_category();
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data_menu, $data_content);
        }
        public function action_articles(){
            $data_menu = $this->model->get_menucp();
            $data_content = $this->model->get_articles();
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data_menu, $data_content);
        }
	}
