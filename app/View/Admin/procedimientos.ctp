<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <span>Tipos de Procedimiento</span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row">
		<div class="col s12 center-align">
			<h1>Tipo de procedimientos</h1>
		</div>
	</div>	

	<div class="row">
		<div class="col s12">
			<table class="bordered striped highlight centered">
				<thead> 
					<tr>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<?php foreach ($procedimientos as $procedimiento): ?>
						
				<tr>
					<td>
						<a href="/admin/procedimiento/<?php echo $procedimiento['Procedimiento']['id']; ?>"><?php echo $procedimiento['Procedimiento']['name']; ?></a>
					</td>
					<td width="60%"><?php echo $procedimiento['Procedimiento']['descripcion']; ?></td>
					<td class="acciones">
						<a href="#">Editar</a>
						<a href="#">Borrar</a>
					</td>
				</tr>

				<?php endforeach ?>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col s12 right-align">
			  <a href="/admin/agregar_procedimiento" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
		</div>
	</div>

</div>