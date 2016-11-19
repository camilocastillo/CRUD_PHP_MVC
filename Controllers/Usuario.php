<?php include "ControladorM.php";

class Usuario extends ControladorM{

	public function __construct(){
		parent::__construct();

	} 

	public function usuario(){

		$datos = $this->model->consultar("Usu_id is NOT NULL"); 
		$this->vista->render($this,"usuario",$datos);
	}

	public function agregar(){

		$datos =[];
		$datos['nombres'] = $_POST['nombres'];
		$datos['apellidos'] = $_POST['apellidos'];
		$datos['direccion'] = $_POST['direccion'];
		$datos['telefono'] = $_POST['telefono'];

		$this->model->agregar($datos); 
		$datos = $this->model->consultar("Usu_id is NOT NULL"); 
		$respuesta = "";

		foreach ($datos as $key => $value) {
			$respuesta.= "<tr>
							<td>{$value['Usu_nombres']}</td>
							<td>{$value['Usu_apellidos']}</td>
							<td>{$value['Usu_direccion']}</td>
							<td>{$value['Usu_telefono']}</td>
							<td><button class= 'btn btn-info' onclick='ventanaModal(".json_encode($value).")'>Actualizar</button>
							    <button class= 'btn btn-danger' onclick='eliminarUsuario({$value['Usu_id']})'>Eliminar</button>
							    
							</td>
						 </tr>";
		}

		echo $respuesta;
		

	}

	public function eliminar(){

		$consicion = " Usu_id = '".$_POST['id']."'";
		$this->model->eliminar($consicion); 

		$datos = $this->model->consultar("Usu_id is NOT NULL"); 
		$respuesta = "";

		foreach ($datos as $key => $value) {
			$respuesta.= "<tr>
							<td>{$value['Usu_nombres']}</td>
							<td>{$value['Usu_apellidos']}</td>
							<td>{$value['Usu_direccion']}</td>
							<td>{$value['Usu_telefono']}</td>
							<td><button class= 'btn btn-info' onclick='ventanaModal(".json_encode($value).")'>Actualizar</button>
							    <button class= 'btn btn-danger' onclick='eliminarUsuario({$value['Usu_id']})'>Eliminar</button>
							    
							</td>
						 </tr>";
		}

		echo $respuesta;

	}

	public function actualizar(){

		$datos =[];
		$datos['nombres'] = $_POST['nombres'];
		$datos['apellidos'] = $_POST['apellidos'];
		$datos['direccion'] = $_POST['direccion'];
		$datos['telefono'] = $_POST['telefono'];
		$datos['id'] = $_POST['id'];

		$this->model->actualizar($datos); 

		$datos = $this->model->consultar("Usu_id is NOT NULL"); 
		$respuesta = "";

		foreach ($datos as $key => $value) {
			$respuesta.= "<tr>
							<td>{$value['Usu_nombres']}</td>
							<td>{$value['Usu_apellidos']}</td>
							<td>{$value['Usu_direccion']}</td>
							<td>{$value['Usu_telefono']}</td>
							<td><button class= 'btn btn-info' onclick='ventanaModal(".json_encode($value).")'>Actualizar</button>
							    <button class= 'btn btn-danger' onclick='eliminarUsuario({$value['Usu_id']})'>Eliminar</button>
							    
							</td>
						 </tr>";
		}

		echo $respuesta;
	}
}


 ?>