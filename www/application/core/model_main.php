<?php
	class Model_Main{
        protected $db;
        public function  get_model_main(){
            $this->db = Db_ext::getInstance();
            $rezult = $this->db->query('SELECT * FROM admin');
            $res = $rezult->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
    }
?>