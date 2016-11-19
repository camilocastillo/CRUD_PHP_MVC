function ventanaModal(valor){

	if (valor==null) {
		$('#miModal').modal('show');
		$('#btn_registrar').show();
		$('#btn_actualizar').hide();

		$('#formulario').reset();
		
	}else{

		$('#btn_registrar').hide();
		$('#btn_actualizar').show();
		$('#input_nombres').val(valor.Usu_nombres);
		$('#input_apellidos').val(valor.Usu_apellidos);
		$('#input_direccion').val(valor.Usu_direccion);
		$('#input_telefono').val(valor.Usu_telefono);
		$('#input_id').val(valor.Usu_id);
		$('#miModal').modal('show');

	}
	

}


function registrarUsuario(){
	var json_datos = {

			'nombres':$('#input_nombres').val(),
			'apellidos':$('#input_apellidos').val(),
			'direccion':$('#input_direccion').val(),
			'telefono':$('#input_telefono').val()
	};

	$.ajax({

		url:"Usuario/agregar",
		type: 'post',
		typedata: 'json',
		data: json_datos,
		success: function(respuesta){
			$("#tabla-body").html(respuesta);

		}
	});
}



function actualizarUsuario(){

	var json_datos = {

			'nombres':$('#input_nombres').val(),
			'apellidos':$('#input_apellidos').val(),
			'direccion':$('#input_direccion').val(),
			'telefono':$('#input_telefono').val(),
			'id': $('#input_id').val()
	};


	$.ajax({

		url:"Usuario/actualizar",
		type: 'post',
		typedata: 'json',
		data: json_datos,
		success: function(respuesta){
			$("#tabla-body").html(respuesta);

		}
	});
}


function eliminarUsuario(id){

	var json_datos = {
		'id': id
	};

		$.ajax({

		url:"Usuario/eliminar",
		type: 'post',
		typedata: 'json',
		data: json_datos,
		success: function(respuesta){
			$("#tabla-body").html(respuesta);

		}
	});
}