<?php 
	
	class Conexion{

		private $datos = array('host'=> 'localhost', 
							 'user'=> 'root', 
							 'pass'=>'',
							 'db'=>'crud_mvc');
		private $con;

		public function __construct(){

			$this->con = new mysqli($this->datos['host'],$this->datos['user'],$this->datos['pass'],$this->datos['db']);
		}

		public function add($datos){
			$consulta= "INSERT INTO usuarios (Usu_id,Usu_nombres,Usu_apellidos,Usu_direccion,Usu_telefono) VALUES (null,'{$datos['nombres']}','{$datos['apellidos']}','{$datos['direccion']}','{$datos['telefono']}')";
			$this->con->query($consulta);

		}

		public function read($where){

			$consulta= "SELECT * FROM usuarios WHERE ".$where;
			$datos = $this->con->query($consulta);

			while ($fila = $datos->fetch_assoc()) {
				$respuesta[] = $fila;
			}

			return $respuesta;

		}

		public function update($datos){
			$consulta = "UPDATE usuarios SET Usu_nombres = '{$datos['nombres']}',Usu_apellidos = '{$datos['apellidos']}',Usu_direccion = '{$datos['direccion']}',Usu_telefono = '{$datos['telefono']}' WHERE Usu_id = '{$datos['id']}'";

			$this->con->query($consulta);

		}

		public function delete($where){
			$consulta= "DELETE FROM usuarios WHERE ".$where;

			$this->con->query($consulta);

		} 
	}

 ?>