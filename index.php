<?php 
require "Config.php";

$url = !isset($_GET["url"])? "Usuario/usuario":$_GET["url"]; 
$url = explode("/", $url);


$controlador = $url[0];

$metodo = $url[1];

$rutaControlador= "Controllers/".$controlador.".php";

if (file_exists($rutaControlador)) {
	
	require $rutaControlador;

	$controller = new $controlador; 

	if (method_exists($controller, $metodo)) {
		
		$controller->{$metodo}();
	}else{
		echo "NO EXISTE METODO";
	}

	}else{
		echo "NO EXISTE CONTROLADOR";
	}

 
 ?>



