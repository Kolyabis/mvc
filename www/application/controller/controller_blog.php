<?php
	class Controller_blog extends Controller{
		public $model, $view;
        public $data_arr;
		public function __construct(){
			$this->model = new Model_blog();
			$this->view = new View_Main();
            $this->data_arr = new data_class();
		}
		
        public function action_main(){
            $data_menu = $this->model->get_menucp();
            $data_content = $this->model->get_content();
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data_menu, $data_content);
		}
	}
