<?php
	class Controller_Main{
		protected $model, $view;
        public $data_arr;
		public function __construct(){
			$this->model = new Model_Main();
			$this->view = new View_Main();
            $this->data_arr = new data_class();
		}
		
        public function action_main(){
            $data = $this->model->get_model_main();
            $data = $this->data_arr->get_content($data);
            $this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data);
		}

        public function __call($n, $p){
                            echo '1';
        }

	}

?>

