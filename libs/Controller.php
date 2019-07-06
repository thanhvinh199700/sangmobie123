<?php
	class Controller{
		function __construct(){
			$this->load=new View;
			$this->p = new Paginator;
		}
		public function loadModel($name){
				$path ="model/".$name."_model.php";
				if(file_exists($path))
				{
					require $path;
					$modelName = $name."_Model";
					$this->model = new $modelName;
				}
				else
				{
					echo"method does not exists";
				}
				
			}
			
	}
?>