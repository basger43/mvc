<?php 
	class Post{
		public function __construct(){
			echo "__Construct From Post<br>";
		}
		public function abc(){
			echo "this method is from Post<br>";
		}
		public function def($a= "Not Found Any Param"){
			echo "this method is from Post with parama -> $a<br>";
		}
	}

 ?>