<?php
class Url{
	function __construct(){
		session_start();
		$url=$_SERVER['REQUEST_URI'];		//echo $url;die;

									// echo $url;
		$url=rtrim($url,"/");
		//echo $url;die;
		$url=explode("/",$url);
		if(!isset($url[3])){
			require"controllers/frontend.php";
			require"model/frontend_model.php";
			$controller=new Frontend();
			$controller->index();
			return false;
		}

		$file="controllers/".$url[3].".php";
		if(file_exists($file)){
			require($file);
		}

		else {
			require"controllers/error1.php";
			$controller = new Error1();
			return false;
		}

		$controller = new $url[3];
		$controller ->loadModel($url[3]);
		if(isset($url[5])){
			if(method_exists($controller,$url[4])){
				call_user_func_array(array($controller, $url[4]),array_slice($url,5));
			}
			else
			{
				echo"method does not exists";
			}

		}

		else{
			if(isset($url[4]))
			{
				if(method_exists($controller,$url[4]))
				{
					$f=$url[4];
					$controller->$f();
				}
				else
				{
					echo"method does not exists";

				}	
			}

			else{
				$controller->index();
			}
		}
		
	}

	
}
?>