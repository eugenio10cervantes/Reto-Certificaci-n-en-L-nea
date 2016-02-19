<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <a href="/admin/procedimiento/<?php echo $perfil['Nivel']['Procedimiento']['id']; ?>">Procedimiento <?php echo $perfil['Nivel']['Procedimiento']['name']; ?></a> > <a href="/admin/nivel/<?php echo $perfil['Nivel']['id']; ?>"><?php echo $perfil['Nivel']['name']; ?></a> > <span><?php echo $perfil['Perfil']['name']; ?></span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row">
		<div class="col s12 center-align">
			<h1><?php echo $perfil['Perfil']['name']; ?></h1>
		</div>
	</div>	

	<div class="row">
		<div class="col s12">
			<h2>Requisitos</h2>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<table class="highlight bordered">
				<thead>
					<tr>
						<th>Requisito</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($perfil['Requisito'] as $requisito): ?>
						<tr>
							<td><?php echo $requisito['requisitos']; ?></td>
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
			  <a href="/admin/agregar_perfil/<?php echo $perfil['Perfil']['id']; ?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
		</div>
	</div>

</div>