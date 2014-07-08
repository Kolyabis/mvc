<?php
	class Model_Main extends Model{
        protected $db;
        public $data;
        /* Вызов методов с данными и формирование одного многомерного массива */
        /*public function  get_main(){
            $menucp = $this->get_menucp();
            $menu = $this->get_menu();

            $data[] = array('menucp' => $menucp, 'menu' => $menu);
            return $data;
        }*/
        public function  get_menucp(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menucp');
            $menucp = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $menucp;
        }
        // Метод возврата массива меню сайта для админки
        public function get_menu(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM menu');
            $menu = $rezult->fetchAll(PDO::FETCH_ASSOC);
            $menuList[] = array('menu' => $menu);
            return $menuList;
        }
        // Метод возврата массива с категориями для админки
        public function get_category(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT id, name, alias, status FROM categorya');
            $category = $rezult->fetchAll(PDO::FETCH_ASSOC);
            $categoryList[] = array('category' => $category);
            return $categoryList;
        }
        public function get_articles(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM blog');
            $articles = $rezult->fetchAll(PDO::FETCH_ASSOC);
            $articlesList[] = array('articles' => $articles);
            return $articlesList;
        }
        /* останется этот метод ля отображения сайта
         * public function get_content(){
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