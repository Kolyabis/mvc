<?php
	class Model_Main extends Model{
        protected $db;
        public  $menu;
        public  $content;
        public $d;
        public function  get_model_main(){
            $m = $this->menu = $this->get_menu();
            $c = $this->content = $this->get_content();
            $d[] = array('menu' => $m, 'content' => $c);
            return $d;
        }
        public function  get_menu(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menucp');
            $menu = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menu;
        }
        public function get_content(){
            $this->db = Db_ext::getInstance();
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            if(!empty($routes[1])){
                $alias = $routes[1];
            }else{
                $alias = 'main';
            }
            $rezult = $this->db->query("SELECT * FROM menucp m, categorya c WHERE m.id_categorya = c.id and m.alias = '$alias'");
            $content = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $content;
        }
    }
?>