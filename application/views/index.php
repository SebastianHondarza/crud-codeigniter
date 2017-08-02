<script>
	jQuery(document).ready(function($) {
		$('#btnNuevo').click(function(event) {
			event.preventDefault();
			$('#modal-nuevo').modal('show');
		});
	});
</script>
<br>
<div class="row">
	<div class="col-sm-3">
		<div class="input-group">
		<input type="text" class="form-control" placeholder="..." autofocus="">
			<div class="input-group-addon">
				<i class="glyphicon glyphicon-search"></i>
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<label for="">CRUD - CodeIgniter By: SebastianHondarza</label>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-3">
		<button class="btn btn-success" id="btnNuevo">Nuevo</button>	
	</div>
</div>
<table class="table table-bordered">
	<thead class="bg-primary">
		<th>#</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>-</th>		
	</thead>
	<tbody>
		<?php 
		foreach ($arr as $key) {
			echo "<tr>";
		 	echo "<td>".$key->id."</td>";			
		 	echo "<td>".$key->nombre."</td>";
		 	echo "<td>".$key->apellido."</td>";
		 	echo "<td><button id='$key->id' class='btnVer btn btn-xs btn-info'>Ver</button>";
		 	echo "&nbsp;";

		 	echo "<button id='$key->id' class='btnModificar btn btn-xs btn-warning'>Modificar</button>";
		 	echo "&nbsp;";
		 	echo "<button id='$key->id' class='btnEliminar btn btn-xs btn-danger'>Eliminar</button></td>";
			echo "</tr>";

		 } ?>
	</tbody>
</table>




<!--MODAL NUEVO REGISTRO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-nuevo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nuevo Registro</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" method="POST" action="<?php echo base_url();?>portada/guardar">
      		<div class="form-group">
      			<label class="control-label col-sm-2" for="txtNombre">Nombre:</label>
      			<div class="col-sm-10">
      				<input type="text" required="" name="txtNombre" class="form-control" id="txtNombre">
      			</div>
      		</div>
      		<div class="form-group">
      			<label class="control-label col-sm-2" for="txtApellido">Apellido:</label>
      			<div class="col-sm-10">
      				<input type="text" required="" name="txtApellido" class="form-control" id="txtApellido">
      			</div>
      		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      	</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->