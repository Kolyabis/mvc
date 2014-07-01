<?php
	class Model_blog extends Model{
        protected $db;
        public  $menu;
        public  $content;
        public $d;
        public function  get_model_main(){
            $m = $this->menu = self::get_menu();
            $c = $this->content = self::get_content();
            $d[] = array('menu' => $m, 'content' => $c);
            return $d;
        }
        public function  get_menu(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menu');
            $menu = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menu;
        }
        public function get_content(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM categorya');
            $content = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $content;
        }
    }