<?php 
	class Main{
		public $url;
		public $controller;
		public $controllerPath = "app/controllers/";
		public $controllerName = "Index";
		public $methodName     = "Index";

		public function __construct(){
			$this->getUrl();
			$this->loadController();
			$this->callMethod(); 
		}

		public function getUrl(){
			$this->url = isset($_GET['url'])?$_GET['url']:NULL;
			if ($this->url != NULL) {
				$this->url = rtrim($this->url, "/");
				$this->url = explode("/", $this->url);
			}else{
				unset($this->url);
			}
		}

		public function loadController(){
			if (!isset($this->url[0])) {
				include_once $this->controllerPath.$this->controllerName.".php";
				$this->controller = new $this->controllerName();
			}else{
				$this->controllerName = $this->url[0];
				$file = $this->controllerPath.$this->controllerName.".php";
				if (file_exists($file)) {
					/************************ 1 ************************/
					include_once $file;
					/************************ 2 ************************/
					if (class_exists($this->controllerName, false)) {
					/************************ 3 ************************/
						$this->controller = new $this->controllerName();
					}else{
						echo "Class Not Found.<br>";
					}
				}else{
					echo "File Not Found.<br>";
				}
			}
		}

		public function callMethod(){
			if (isset($this->url[2])) {
				$this->methodName = $this->url[1];
				if (method_exists($this->controller, $this->methodName)) {
					/************************ 4 ************************/
					$this->controller->{$this->methodName}($this->url[2]);	
				}else{
					echo "Mehod not found<br>";
				}
				
			}else{
				if (isset($this->url[1])) {
					$this->methodName = $this->url[1];
					if (method_exists($this->controller, $this->methodName)) {
						$this->controller->{$this->methodName}();
					}else{
						echo "Method not found of without param<br/>";
					}
				}else{
					if (method_exists($this->controller, $this->methodName)) {
						$this->controller->{$this->methodName}();	
					}else{
						echo "From Default<br/>";
					}
				}
			}

		}
	}

 ?>

 <?php 

/*

1 	include_once tar purbe included kono file ke r include korbena

2	class_exists er class_name autoload e jabe kina 2nd param e true/false die bola jai

3 	instance jodi tar position theke spl autoload er position porjonto kothao class take peye jai tahole autoload 	  e r class er name jabena
		example:	spl_autoload_register(function($abc){
						include 'abcd/'.$abc.".php";
						echo $abc."<br/>";
					});

					include 'abcd/a.php';
					new a();

4 	$this->url[1]() evabe method call korle error show korbe. shutoran method er name take ekta variable e nie {} shoho call kora lagbe : $this->methodName = $this->url[1]; $this->controller->{$this->methodName}();






class Main{
	public $url;
	public $controllerPath="app/controllers/";
	public $controllerName="Index";
	public $controller;
	public $method="Index";

	public function __construct(){
		$this->getUrl();
		$this->loadController();
		$this->callMethod();
	}

	public function getUrl(){
		$this->url = isset($_GET['url'])?$_GET['url']:NULL;
		if ($this->url != NULL) {
			$this->url = rtrim($this->url, "/");
			$this->url = explode("/", $this->url);
		}else{
			unset($this->url);
		}
		
	}

	public function loadController(){
		if (!isset($this->url[0])) {
			$file = $this->controllerPath.$this->controllerName.".php";
			if (file_exists($file)) {
				include_once $file;
				if (class_exists($this->controllerName, false)) {
					$this->controller = new $this->controllerName();
				}else{
					echo "Index Class Is Not Defined<br/>";
				}
			}else{
				echo "Default Controller File (Index.php) Not Exists<br/>";
			}
		}else{
			$this->controllerName = $this->url[0];
			$file = $this->controllerPath.$this->controllerName.".php";
			if (file_exists($file)) {
				include_once $file;
				if (class_exists($this->controllerName, false)) {
					$this->controller = new $this->controllerName();
				}else{
					echo $this->controllerName." Class Not Found<br/>";
				}
			}else{
				echo $this->controllerName." File Not Found<br/>";
			}
		}
	}

	public function callMethod(){
		if (isset($this->url[2])) {
			$this->method = $this->url[1];
			if (method_exists($this->controller, $this->method)) {
				$this->controller->{$this->method}($this->url[2]);
			}else{
				echo $this->method." Such Method Not Found<br/>";
			}
		}else{
			if (isset($this->url[1])) {
				$this->method = $this->url[1];
				if (method_exists($this->controller, $this->method)) {
					$this->controller->{$this->method}();
				}else{
					echo $this->method." Such Method Not Found<br/>";
					}
			}else{
				$file = $this->controllerPath.$this->controllerName.".php";
				if (file_exists($file)) {
					$this->controller->{$this->method}();
				}else{
					echo "Not Found<br/>";
				}
				
			}
		}
	}
}
















*/


  ?>