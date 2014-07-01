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
            $data = $this->model->get_model_main();
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data);
		}
        public function action_del(){
            $data = null;
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data);
        }
	}
