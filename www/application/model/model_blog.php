<?php
	class Model_blog extends Model{
        protected $db;
        public $data;
        /*public function  get_main(){
            $menu =  $this->get_menucp();
            $content =  $this->get_content();
            $data[] = array('menucp' => $menu, 'content' => $content);
            return $data;
        }*/
        public function  get_menucp(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menucp');
            $menucp = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menucp;
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