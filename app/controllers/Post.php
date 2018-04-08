<?php 
	class Post extends MainController{
		public function __construct(){
			parent::__construct();
		}

		public function selectPost(){
			$data = array();
			$tbl  = "post";
			$postObj = $this->load->model("postModel");
			$data['allPost'] = $postObj->select($tbl);
			$this->load->home1("home", $data);
		}
		public function postById($id){
			$data = array();
			$tbl  = "post";
			$postObj = $this->load->model("postModel");
			$data['allPost'] = $postObj->postById($tbl, $id);
			$this->load->home1("home", $data);
		}
		public function addPost(){
			$tbl  = "post";
			$arr = array('title'=>'10th title', 'content'=>'10th test content', 'ctId'=>10);
			$postObj =$this->load->model("postModel");
			$postObj->addPost($tbl, $arr);
		}
		public function updatePost(){
			$id = 2;
			$tbl  = "post";
			$arr = array('title'=>'10th title', 'content'=>'10th test content', 'ctId'=>10);
			$postObj =$this->load->model("postModel");
			$postObj->addPost($tbl, $arr, $id);
		}







	}

 ?>