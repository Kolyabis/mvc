<?php
	class Model_Cpanel extends Model{
		public function get_data(){
			$array_model = array();
			$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
			$rezult = $db->query('SELECT name, alias FROM menucp');
			$rows = $rezult->fetchAll(PDO::FETCH_ASSOC);
			return array($rows);
		}
	}