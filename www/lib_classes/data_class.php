<?php
    class data_class{
        // Метод разбора меню Панели администратора
        public function get_menucp($array){
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            if (!empty($routes[1])){
                $alias_name = $routes[1];
            }
            foreach($array as $val){
                if($val['alias'] == $alias_name){
                    echo "<span id='menucp' ><a style='text-decoration: none;' id='activ' href=".$val['alias'].">".$val['name']."</a></span>";
                }else{
                    echo "<span id='menucp' ><a style='text-decoration: none; color: darkred;' href=".$val['alias'].">".$val['name']."</a></span>";
                }
            }
        }
        // Метод вывода меню сайта и редактирование его
        static function getListMenu($array){
            foreach($array as $val){
                echo "<div class='list'>".$val['name_menu']."<span style='float: right;'><a href=".$_SERVER['REQUEST_URI']."/update/".$val['id'].">изминить</a></span></div>";
            }
        }
        // Метод вывода категорий сайта
        static function getListCategory($array){
            foreach($array as $val){
                echo "<div class='list'>".$val['name']."</div>";
            }
        }
        // Метод разбора контента
        static function getListArticles($array){
            foreach($array as $val){
                echo "<div class='list'><span>".$val['name']."</span></div>";
            }
        }
    }