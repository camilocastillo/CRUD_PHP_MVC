<?php 
	
	define( 'DS', DIRECTORY_SEPARATOR);
	define( 'ROOT' , realpath(dirname(__FILE__)) . DS);

	require "Config/Autoload.php";
	Config\Autoload::run();
	require "Views/template.php";
	Config\Enrutador::run(new Config\Request());
	
 ?>