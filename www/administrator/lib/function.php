<?php
    /****************************************** Функция для разбора массива меню ***************************************/
    function get_menu($data){
        $rezult = '';
        foreach($data as $value){
            $count = count($value);
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            for($i = 0; $i <= $count; $i++){
                if($routes[2] == $value[$i]['alias']){
                    $rezult .= "<a id='menuCp' class='active' href='/administrator/cpanel/".$value[$i]['alias']."'>".$value[$i]['name']."</a>";
                }else{
                    $rezult .= "<a id='menuCp' href='/administrator/cpanel/".$value[$i]['alias']."'>".$value[$i]['name']."</a>";
                }
            }
        }
        return $rezult;
    }
    /***************************************************************************************************************** */