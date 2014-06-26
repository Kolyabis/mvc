<?php
 class Form{
     /*********************************** Метод для входа в панель администратора **************************************/
     public function checkForm($log, $pas){
         if(!empty($log) && !empty($pas)){
             $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
             $sql = "SELECT password FROM admin WHERE password = $pas";
             $rezult = $db->query($sql);
             $rows = $rezult->fetchAll(PDO::FETCH_ASSOC);
             if($rows[0]['password'] == $pas){
                 self::location(1);
             }else{
                 self::location(2);
             }
         }else{
             echo "Error - admin";
         }
     }
     /**************************************************************************************************************** */
     /************************** Статический метод для перенаправления на страницу админ панели ************************/
     static public function location($num){
         if($num == intval(1)){
             header('Location: cpanel');
         }else{
             header('Location: main');
         }
     }
     /**************************************************************************************************************** */
 }