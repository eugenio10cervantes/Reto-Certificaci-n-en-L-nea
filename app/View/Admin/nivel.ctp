<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <a href="/admin/procedimiento/<?php echo $nivel['Procedimiento']['id']; ?>">Procedimiento <?php echo $nivel['Procedimiento']['name']; ?></a> > <span><?php echo $nivel['Nivel']['name']; ?></span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">
	<div class="row">
		<div class="col s12 center-align">
			<h1><?php echo $nivel['Nivel']['name']; ?></h1>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<h2>Perfiles asociados</h2>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<table class="highlight bordered">
				<thead>
					<tr>
						<th>Pérfil</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($nivel['Perfil'] as $perfil): ?>
						<tr>
							<td>
								<a href="/admin/perfil/<?php echo $perfil['id']; ?>">
									<?php echo $perfil['name']; ?>
								</a>
							</td>
							<td class="acciones">
								<a href="#">Editar</a>
								<a href="#">Borrar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col s12 right-align">
			<a href="/admin/agregar_perfil/<?php echo $nivel['Nivel']['id']; ?>" class="btn-floating btn-large waves-effect waves-light red" title="Agregar pérfil"><i class="material-icons">add</i></a>
		</div>
	</div>
</div>