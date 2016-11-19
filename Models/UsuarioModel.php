<?php
include "Conexion.php";

class UsuarioModel extends Conexion {
	
	public function __construct(){
		parent::__construct();
	}

	public function agregar($datos){
		$this->add($datos);
	}

	public function consultar($where){
		return $this->read($where);
	}

	public function actualizar($datos){
		$this->update($datos);	
	}

	public function eliminar($where){
		$this->delete($where);
	}


}

?>