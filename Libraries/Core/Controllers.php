<?php 
	
	class Controllers
	{
		public $model;
		public function __construct()
		{
			$this->views = new Views();
			$this->loadModel();
		}

		public function loadModel()
		{
			//HomeModel.php
			$model =lcfirst(get_class($this)."Model");
			$routClass = "Models/".$model.".php";
			// var_dump($routClass);
			if(file_exists($routClass)){
				require_once($routClass);
				$this->model = new $model();
			}
		}
	}

 ?>