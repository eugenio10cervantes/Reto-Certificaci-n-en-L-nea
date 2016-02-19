<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <span>Solicitudes</span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row">
		<div class="col s12 center-align">
			<h1>Solicitudes</h1>
		</div>
	</div>

	<?php echo $this->Form->create('Busqueda'); ?>

	<div class="row">
		<div class="col s12">
		
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="material-icons">search</i>Buscar</div>
					<div class="collapsible-body">
						<div class="row" style="padding-left:50px; padding-right:50px;">
							<div class="col m4 s12 input-field">
								<?php echo $this->Form->input('numero_solicitud',array(
									'div'=>false,
									'label'=>false
								)); ?>
					      		<label for="last_name">Número de solicitud</label>
							</div>
							<div class="col m4 s12 input-field">
								<?php echo $this->Form->input('estatus',array(
									'type'=>'select',
									'options'=>array(
										'Registrado'=>'Registrado'
									),
									'empty'=>'Estatus',
									'label'=>false
								)); ?>
							</div>

							<div class="col m4 s12 input-field">
								<?php echo $this->Form->input('entidad_federativa',array(
									'type'=>'select',
									'options'=>array(
										'Aguascalientes'=>'Aguascalientes',
										'Baja California'=>'Baja California',
										'Baja California Sur'=>'Baja California Sur',
										'Campeche'=>'Campeche',
										'Chiapas'=>'Chiapas',
										'Chihuahua'=>'Chihuahua',
										'Coahuila'=>'Coahuila',
										'Colima'=>'Colima',
										'Distrito Federal'=>'Distrito Federal',
										'Durango'=>'Durango',
										'Estado de México'=>'Estado de México',
										'Guanajuato'=>'Guanajuato',
										'Guerrero'=>'Guerrero',
										'Hidalgo'=>'Hidalgo',
										'Jalisco'=>'Jalisco',
										'Michoacán'=>'Michoacán',
										'Morelos'=>'Morelos',
										'Nayarit'=>'Nayarit',
										'Nuevo León'=>'Nuevo León',
										'Oaxaca'=>'Oaxaca',
										'Puebla'=>'Puebla',
										'Querétaro'=>'Querétaro',
										'Quintana Roo'=>'Quintana Roo',
										'San Luis Potosí'=>'San Luis Potosí',
										'Sinaloa'=>'Sinaloa',
										'Sonora'=>'Sonora',
										'Tabasco'=>'Tabasco',
										'Tamaulipas'=>'Tamaulipas',
										'Tlaxcala'=>'Tlaxcala',
										'Veracruz'=>'Veracruz',
										'Yucatán'=>'Yucatán',
										'Zacatecas'=>'Zacatecas'
									),
									'empty'=>'Entidad Federativa',
									'label'=>false
								)); ?>
							</div>
						</div>
						<div class="row" style="padding-left:50px; padding-right:50px;">
							<div class="col s12 right-align">
								<button class="btn" type="submit">Filtrar</button>
							</div>
						</div>
					</div>
				</li>
			</ul>

		</div>
	</div>

	<?php echo $this->Form->end(); ?>

	<div class="row">
		<div class="col s12">
			<table class="highlight striped bordered responsive-table">
				<thead>
					<tr>
						<th>Número de solicitud</th>
						<th>Nombre de solicitante</th>
						<th>Estatus</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($solicitudes as $solicitud): ?>
						<tr>
							<td><?php echo $solicitud['Solicitude']['numero_solicitud']; ?></td>
							<td><?php echo $solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido']; ?></td>
							<td><?php echo $solicitud['Solicitude']['estatus']; ?></td>
							<td class="acciones">
								<a href="/admin/solicitud/<?php echo $solicitud['Solicitude']['id']; ?>" class="btn">Revisar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php $this->Html->scriptStart(array('inline'=>false)); ?>

		$(document).ready(function() {
			$('select').material_select();
		});

	<?php $this->Html->scriptEnd(); ?>

	<div class="row" style="margin-top:40px;">
		<div class="col s12 center-align">
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>