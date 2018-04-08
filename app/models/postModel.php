<?php 

class postModel extends MainModel{
	public function __construct(){
		parent::__construct();
	}

	public function select($tbl){
		return $this->db->select($tbl);
	}

	public function postById($tbl, $id){
		return $this->db->selectPostById($tbl, $id);
	}
	public function addPost($tbl, $arr){
		$this->db->add($tbl, $arr);
	}
	public function updatePost($tbl, $arr, $id){
		$this->bd->update($tbl, $arr, $id);
	}
}

 ?>