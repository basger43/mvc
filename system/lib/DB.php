<?php 

class DB extends PDO{
	public function __construct($dsn, $use, $pas){
		parent::__construct($dsn, $use, $pas);
	}

	public function select($tbl){
		$stmt = $this->prepare("SELECT * FROM $tbl");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function selectPostById($tbl, $id){
		$stmt = $this->prepare("SELECT * FROM $tbl WHERE id=$id");
		$stmt->execute();
		return $stmt->fetchAll();
	}
	public function add($tbl, $arr){
		$key = implode(",", array_keys($arr));
		$keys = ":".implode(", :", array_keys($arr));
		$stmt = $this->prepare("INSERT INTO $tbl ($key) VALUES ($keys)");
		foreach ($arr as $key => $value) {
			$stmt->bindValue(":$key", $value);
		}
		$stmt->execute();
	}
	public function update($tbl, $arr, $id){
		
	}
}

 ?>