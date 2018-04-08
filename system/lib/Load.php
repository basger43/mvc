<?php 
	
	class Load{
		public function home1($fileName, $data=array()){
			extract($data);
			include_once "app/views/".$fileName.".php";
		}
		public function model($fileName){
			include_once "app/models/".$fileName.".php";
			return new $fileName();
		}
	}

 ?>