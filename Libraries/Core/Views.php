<?php 
	
	class Views
	{
		//recoge el controlador que quiero que me carge y su vista
		function getView($controller,$view,$data="")
		{
			$controller = get_class($controller);
			if($controller == "Home"){
				$view = "Views/".$view.".php";
			}else{
				$view = "Views/".$controller."/".$view.".php";
			}
			require_once ($view);
		}
	}

 ?>