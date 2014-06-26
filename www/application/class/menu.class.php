<?php
	class menu extends Model{
		public function get_data(){
			$array_model = array();
			$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);			
			$rezult = $db->query('SELECT alias, name_menu FROM menu');
			$rows = $rezult->fetchAll(PDO::FETCH_ASSOC);
			$count = count($rows);
			foreach($rows as $row){
				return array($rows);
			}
		}
	}