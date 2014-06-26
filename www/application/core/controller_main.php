<?php
	class Controller_Main{
		protected $model, $view;
		public function __construct(){
			$this->model = new Model_Main();
			$this->view = new View_Main();
		}
		
		function action_main(){
            $data = $this->model->get_model_main();
			$this->view->generate('view_header.php', 'view_content.php', 'view_footer.php', $data);
		}
	}
?>