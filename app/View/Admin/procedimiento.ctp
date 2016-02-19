<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <span>Procedimiento <?php echo $procedimiento['Procedimiento']['name']; ?></span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row">
		<div class="col s12 center-align">
			<h1>Procedimiento <?php echo $procedimiento['Procedimiento']['name']; ?></h1>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<p><?php echo $procedimiento['Procedimiento']['descripcion']; ?></p>
		</div>
	</div>

	<div class="row">
		<div class="col s12">

			<h2>Niveles asociados</h2>

			<table class="highlight bordered">
				<thead>
					<tr>
						<th>Nivel</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($procedimiento['Nivel'] as $nivel): ?>
	
						<tr>
							<td>
								<a href="/admin/nivel/<?php echo $nivel['id']; ?>">
									<?php echo $nivel['name']; ?>
								</a>
							</td>
							<td class="acciones">
								<a href="#">Ver</a>
								<a href="#">Editar</a>
							</td>
						</tr>

					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col s12 right-align">
			<a href="/admin/agregar_nivel/<?php echo $procedimiento['Procedimiento']['id']; ?>" class="btn-floating btn-large waves-effect waves-light red" title="Agregar nivel"><i class="material-icons">add</i></a>
		</div>
	</div>
</div>