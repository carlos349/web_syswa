<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if( $enlaces == "home" || 
			$enlaces == "services"||
			$enlaces == "contact" ||
			$enlaces == "about" ||
			$enlaces == "portfolio" ||
			$enlaces == "planBronce" ||
			$enlaces == "item"
			 ){

			$module = "views/modules/".$enlaces.".php";

		}
		else if($enlaces == "index"){
			$module = "views/modules/home.php";
		}else if ($enlaces == "accesoNoPermitido") {
			$module = "views/modules/accesoNoPermitido.html";
		}else{
			$module = "views/modules/404.html";
		}

		return $module;

	}


}