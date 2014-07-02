<?php
	class Model_Main extends Model{
        protected $db;
        public $data;
        /* Вызов методов с данными и формирование одного многомерного массива */
        public function  get_model_main(){
            $menucp = $this->get_menucp();
            $menu = $this->get_menu();
            //$content = $this->get_content();
            $data[] = array('menucp' => $menucp, 'menu' => $menu/*, 'content' => $content*/);
            return $data;
        }
        public function  get_menucp(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menucp');
            $menucp = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menucp;
        }
        public function get_menu(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menu');
            $menu = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menu;
        }
        /*public function get_content(){
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
        }*/
    }