<section>
		<div class="col-md-6 center-block quitar-float">
			<h1 class="text-center">CRUD</h1>
			<button class="btn btn-primary" onclick="ventanaModal(null)">Agregar</button>

			<table  class="table table-hover table-bordered espacio-arriba">
				<thead>
					<tr>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody id="tabla-body">

				<?php 
				if (!empty($datos))
				foreach ($datos as $key => $value) {
					echo "<tr>
							<td>{$value['Usu_nombres']}</td>
							<td>{$value['Usu_apellidos']}</td>
							<td>{$value['Usu_direccion']}</td>
							<td>{$value['Usu_telefono']}</td>
							<td><button class= 'btn btn-info' onclick='ventanaModal(".json_encode($value).")'>Actualizar</button>
							    <button class= 'btn btn-danger' onclick='eliminarUsuario({$value['Usu_id']})'>Eliminar</button>
							    
							</td>
						 </tr>";
				}
				 ?>
					
				</tbody>

			</table>
		</div>

</section>





<!-- Modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="miModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registrar</h4>
      </div>
      <div class="modal-body">
       		<form id="formulario">
       			<div class="form-group">
       				<label>Nombres</label>
       				<input type="text" class="form-control" name="" id="input_nombres">
       			</div>

       			<div class="form-group">
       				<label>Apellidos</label>
       				<input type="text" class="form-control" name="" id="input_apellidos">
       			</div>

       			<div class="form-group">
       				<label>Direccion</label>
       				<input type="text" class="form-control" name="" id="input_direccion">
       			</div>

       			<div class="form-group">
       				<label>Telefono</label>
       				<input type="text" class="form-control" name="" id="input_telefono">
       				<input type="hidden"  name="" id="input_id">
       			</div>

       		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="btn_registrar" onclick="registrarUsuario()">Guardar</button>
        <button type="button" class="btn btn-warning" id="btn_actualizar" onclick="actualizarUsuario()">Editar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="<?php echo URL."Views/public/js/script.js";?>"></script>