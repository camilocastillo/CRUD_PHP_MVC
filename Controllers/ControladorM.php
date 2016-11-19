<?php 
	require "Views/View.php";

	class ControladorM{
		
		public function __construct(){
		$this->vista = new View();
		$this->cargarModelo();	
		}


		public function cargarModelo(){

			$class = get_class($this);

			$rutaModelo= "Models/".$class."Model.php";

			if (file_exists($rutaModelo)) {
				
				require $rutaModelo;

				$modelo = $class."Model";

				$this->model = new $modelo;
			}


			 	}

	}


 ?>