<?php
    class data_class{
        public function get_menucp($array){
            foreach($array as $row){
                foreach($row['menu'] as $val){
                    echo "<a href=".$val['alias'].">".$val['name']."</a>";
                }
            }

            return $array;
        }
        public function get_content($array){
            return $array;
        }
    }