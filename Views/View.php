<?php 

class View {

	public function __construct(){

	}


	public function render($controlador,$vista,$datos){

		$controlador  = get_class($controlador);
		require "Views/header.php";
		require "Views/".$controlador."/".$vista.".php";
		require "Views/footer.php";
	
	}


}


 ?>