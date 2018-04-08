<?php 

class MainModel{
	public $db;
	public function __construct(){
		$dsn = "mysql:dbname=oop;host=localhost";
		$use = "root";
		$pas = "";
		$this->db = new DB($dsn, $use, $pas);
	}
}

 ?>