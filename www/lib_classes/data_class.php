<?php
    class data_class{
        // Метод разбора меню Панели администратора
        public function get_menucp($array){
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            if (!empty($routes[1])){
                $action_name = $routes[1];
            }
            foreach($array as $row){
                foreach($row['menucp'] as $val){
                    if($val['alias'] == $action_name){
                        echo "<span id='menucp' ><a style='text-decoration: none;' id='activ' href=".$val['alias'].">".$val['name']."</a></span>";
                    }else{
                        echo "<span id='menucp' ><a style='text-decoration: none; color: darkred;' href=".$val['alias'].">".$val['name']."</a></span>";
                    }
                }
            }
        }
        // Метод вывода меню сайта и редактирование его
        public function get_menu($array){
            foreach($array as $row){
                foreach($row['menu'] as $val){
                    echo "<div><a href=".$val['alias'].">".$val['name_menu']."</a></div>";
                }
                /*echo '<pre>';
                print_r($row['menu']);*/
            }
        }

        // Метод разбора контента
        public function get_content($array){
            foreach($array as $row){
                foreach($row['content'] as $val){
                    echo "<div><span>".$val['name']."</span>\n<span>".$val['content']."</span></div>";
                }
                /*echo '<pre>';
                print_r($row['content']);*/
            }
        }
    }