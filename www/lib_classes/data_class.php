<?php
    class data_class{
        // Метод разбора меню
        public function get_menucp($array){
            foreach($array as $row){
                foreach($row['menu'] as $val){
                    echo "<a href=".$val['alias'].">".$val['name']."</a>";
                }
            }
        }
        // Метод разбора контента
        public function get_content($array){
            foreach($array as $row){
                foreach($row['content'] as $val){
                    echo "<p>".$val['name']."</p>\n<div>".$val['content']."</div>";
                }
            }
        }
    }