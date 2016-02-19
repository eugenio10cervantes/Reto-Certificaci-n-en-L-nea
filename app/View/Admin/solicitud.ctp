<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<a href="/admin">Admin</a> > <span>Solicitud <?php echo $solicitud['Solicitude']['numero_solicitud']; ?></span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row" style="margin-bottom:60px;">

		<div class="col s12 center-align">

			<h1 style="margin-bottom:35px;">Revisión de Solicitud</h1>
			<span style="font-size:26px; color: #515151;"><?php echo $solicitud['Solicitude']['numero_solicitud']; ?></span>

		</div>

	</div>

	<div class="row">

		<div class="col m6 s12">

			<div class="card gris-neutro">
				<div class="card-content white-text">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/certificado-blanco.png" style="width:25px; vertical-align:middle;">&nbsp;&nbsp;Datos del certificado</span>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Procedimiento:
						</div>

						<div class="col s8">
							<?php echo $procedimientos[$solicitud['Perfil']['Nivel']['procedimiento_id']]; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Nivel:
						</div>
						<div class="col s8">
							<?php echo $solicitud['Perfil']['Nivel']['name']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Pérfil:
						</div>
						<div class="col s8">
							<?php echo $solicitud['Perfil']['name']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Estatus:
						</div>
						<div class="col s8">
							<?php echo $solicitud['Solicitude']['estatus']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Evaluador asignado:
						</div>
						<div class="col s8">
							<?php echo $solicitud['Evaluador']['nombre'].' '.$solicitud['Evaluador']['primer_apellido'].' '.$solicitud['Evaluador']['segundo_apellido'].' ('.$solicitud['Evaluador']['role'].')'; ?>
						</div>
					</div>

				</div>
			</div>

			<div class="card white">
				<div class="card-content">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos personales</span>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Nombre:
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['nombre']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Primer apellido:
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['primer_apellido']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Segundo apellido:
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['segundo_apellido']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Correo electrónico:
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['username']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Fecha de nacimiento
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['fecha_nacimiento']; ?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Edad
						</div>
						<div class="col s8">
							<?php
								$birthDate = $solicitud['Solicitante']['fecha_nacimiento'];

								# object oriented
								$from = new DateTime($birthDate);
								$to   = new DateTime('today');
								echo $from->diff($to)->y;
		    				?>
						</div>
					</div>

					<div class="row" style="margin-bottom:5px;">
						<div class="col s4 color-gris-claro">
							Entidad Federativa:
						</div>

						<div class="col s8">
							<?php echo $solicitud['Solicitante']['entidad_federativa']; ?>
						</div>
					</div>

				</div>
			</div>

		</div>

		<div class="col m6 s12">


			<div class="card white">
				<div class="card-content">

					<div class="row" style="margin-bottom:0px;">
						<div class="col s12">
							<span class="card-title"><img src="/img/bullets-negro.png" style="width:30px; vertical-align:middle;">&nbsp;&nbsp;Documentos</span>
						</div>
					</div>

					<div class="row">

						<div class="col s12">
							<table class="highlight bordered">
								<thead>
									<tr>
										<th>Requisito</th>
										<th class="center-align">Documento</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>21 años de edad</td>
										<td class="center-align">ND</td>
									</tr>
									<tr>
										<td>Acta de nacimiento</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
									<tr>
										<td>CURP</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
									<tr>
										<td>Identificación Oficial</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
									<tr>
										<td>Certificado total de estudios del antecedente académico o revalidación correspondiente</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
									<tr>
										<td>Constancia de Honorabilidad emitida por una persona física o moral</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
									<tr>
										<td>CV actualizado, con fotografía y firma</td>
										<td class="center-align">
											<a href="/files/pdf.pdf"><i class="material-icons">attach_file</i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


				</div>
			</div>


		</div>

	</div>

	<?php if ($solicitud['Solicitude']['estatus'] == 'Registrado'): ?>

		<div class="row" style="margin-top:60px;">

			<div class="col s4 center-align">

				<div class="row">
					<span class="color-gris-oscuro">Pasar solicitud a estado de</span>
				</div>

				<div class="row">
					<div class="col s12">
						<a href="#desechamiento" class="btn btn-rojo modal-trigger">Desechamiento</a>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<a href="#incompetencia" class="btn btn-rojo modal-trigger">Incompetencia</a>
					</div>
				</div>
			</div>

			<div class="col s4 center-align">
				<div class="row">
					<span class="color-gris-oscuro">Pasar solicitud a estado de</span>
				</div>
				<a href="#prevencion" class="btn btn-amarillo modal-trigger">Prevención</a>
			</div>

			<div class="col s4 center-align">
				<div class="row">
					<span class="color-gris-oscuro">Admitir y asignar a</span>
				</div>
				<div class="row">
					<div class="col s12">
						<a href="#instancia" class="btn btn-verde modal-trigger">Instancia Evaluadora</a>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<a href="#colegio" class="btn btn-verde modal-trigger">Colegio de Profesionistas</a>
					</div>
				</div>
			</div>
		</div>

	<?php endif ?>

	<?php if ($solicitud['Solicitude']['estatus'] == 'Evaluado'): ?>

		<div class="row" style="margin-top:60px;">

			<div class="row">
				<div class="col m4 s12 offset-m4">

					<a href="#resolucion" class="btn btn-verde modal-trigger">Resolución Administrativa</a>

				</div>
			</div>

		</div>

	<?php endif ?>	

</div>

<?php echo $this->Form->create('Resolucion',array(
	'url'=>'/admin/resolucion_administrativa'
)); ?>

	<div id="resolucion" class="modal modal-fixed-footer">
		<div class="modal-content">
			
			<div class="row">
				<div class="col m6 s12">
					
					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="ResolucionNombre">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('expediente',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Solicitude']['numero_solicitud'],
								'disabled'
							)); ?>
							<label>Número de solicitud</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('tipo_procedimiento',array(
								'label'=>false,
								'div'=>false,
								'value'=>$procedimientos[$solicitud['Perfil']['Nivel']['procedimiento_id']],
								'disabled'
							)); ?>
							<label for="ResolucionTipoProcedimiento">Tipo de procedimiento</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="ResolucionNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="ResolucionPerfil">Perfil</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha_nacimiento',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitante']['fecha_nacimiento'],
								'disabled'
							)); ?>
							<label for="ResolucionFechaNacimiento">Fecha de nacimiento</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('entidad_federativa',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitante']['entidad_federativa'],
								'disabled'
							)); ?>
							<label for="ResolucionEntidadFederativa">Entidad Federativa</label>
						</div>
					</div>

				</div>

				<div class="col m6 s12">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos de la Evaluación</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('evaluador',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Evaluador']['nombre'].' '.$solicitud['Evaluador']['primer_apellido'].' '.$solicitud['Evaluador']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="ResolucionEvaluador">Evaluador</label>
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field">
							<?php echo $this->Form->input('dictamen_1',array(
								'label'=>false,
								'div'=>false,
								'value'=>'No Aprobado',
								'disabled'
							)); ?>
							<label for="ResolucionDictamen1">Primer dictamen</label>
						</div>
						<div class="col s6">
							<br>
							<a href="/files/dictamen.pdf" target="_blank"><i class="material-icons">attach_file</i> Ver dictamen</a>
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field">
							<?php echo $this->Form->input('dictamen_2',array(
								'label'=>false,
								'div'=>false,
								'value'=>'No Aprobado',
								'disabled'
							)); ?>
							<label for="ResolucionDictamen2">Segundo dictamen</label>
						</div>
						<div class="col s6">
							<br>
							<a href="/files/dictamen.pdf" target="_blank"><i class="material-icons">attach_file</i> Ver dictamen</a>
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field">
							<?php echo $this->Form->input('dictamen_3',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Aprobado',
								'disabled'
							)); ?>
							<label for="ResolucionDictamen3">Tercer dictamen</label>
						</div>
						<div class="col s6">
							<br>
							<a href="/files/dictamen.pdf" target="_blank"><i class="material-icons">attach_file</i> Ver dictamen</a>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'div'=>false,
								'label'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label>Fecha de expedición</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha_creacion',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitude']['created'],
								'disabled'
							)); ?>
							<label>Fecha de admisión</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 center-align">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Resolución</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Andrés Hernández',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="ResolucionJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
								'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="ResolucionCargo" style="display:none;" class="error">* Required</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field">
							<input type="hidden" name="data[Resolucion][resolucion]" id="PostPublished_" value="0" />
							<input name="data[Resolucion][resolucion]" type="radio" id="resolucion-satisfactoria" value="Aprobado" class="required"/>
      						<label for="resolucion-satisfactoria">Satisfactoria</label>
						</div>
						<div class="col s6 input-field">
							<input name="data[Resolucion][resolucion]" type="radio" id="resolucion-no-satisfactoria" value="No aprobado"/>
      						<label for="resolucion-no-satisfactoria">No satisfactoria</label>
						</div>
						<div class="col s12 center-align">
							<br>
							<label for="data[Resolucion][resolucion]" style="display:none;" class="error">* Es obligatorio seleccionar alguno</label>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="modal-footer fondo-verde">
			<span style="padding-top:12px; display:inline-block;">EMITIR RESOLUCIÓN</span>
			<button id="submit-prevencion" class="btn" type="submit">Emitir Resolución</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('Colegio',array(
	'url'=>'/admin/colegio'
)); ?>

	<div id="colegio" class="modal modal-fixed-footer">
		<div class="modal-content">

			<div class="row" style="margin-top:30px;">
				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>
					
					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="ColegioNombre">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="ColegioNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="ColegioPerfil">Perfil</label>
						</div>
					</div>

				</div>

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos del acuerdo</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'label'=>false,
								'div'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label for="ColegioFecha">Fecha</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Andrés Hernández',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="ColegioJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
								'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="ColegioCargo" style="display:none;" class="error">* Required</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('antecedente',array(
								'label'=>false,
								'div'=>false,
								'class'=>'required'
							)); ?>
							<label>
								Antecedente del nivel de estudios
								<label for="ColegioAntecedente" style="display:none" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('periodo',array(
								'label'=>false,
								'div'=>false,
								'value'=>'cuarto periodo de 2015 o primer periodo de 2016 de la Instancia Evaluadora (Centro Nacional de Evaluación para la Educación Superior, A.C.)',
								'class'=>'required'
							)); ?>
							<label>
								Periodo
								<label for="ColegioPeriodo" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('colegio_id',array(
								'type'=>'select',
								'options'=>$colegios,
								'empty'=>'Colegio a asignar',
								'label'=>false,
								'div'=>false,
								'class'=>'required'
							)); ?>
							<label>
								Colegio
								<label id="label-colegio" for="ColegioColegioId" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Tenoch Esaú Cedillo Ávalos',
								'class'=>'required'
							)); ?>
							<label>
								Destinatario
								<label for="ColegioNombre" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('puesto',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Rector de la Universidad',
								'class'=>'required'
							)); ?>
							<label>
								Puesto
								<label for="ColegioPuesto" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('universidad',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Pedágogica Nacional',
								'class'=>'required'
							)); ?>
							<label>
								Universidad
								<label for="ColegioUniversidad" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>


				</div>

			</div>
		</div>
		<div class="modal-footer fondo-verde">
			<span style="padding-top:12px; display:inline-block;">ASIGNACIÓN A COLEGIO DE PROFESIONALES</span>
			<button id="submit-colegio" class="btn" type="submit">Admitir</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>


<?php echo $this->Form->create('Instancia',array(
	'url'=>'/admin/instancia'
)); ?>

	<div id="instancia" class="modal modal-fixed-footer">
		<div class="modal-content">
			
			<div class="row" style="margin-top:30px;">
				<div class="col m6 s12">
					
					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="InstanciaNombre">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="InstanciaNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'label'=>false,
								'div'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="InstanciaPerfil">Perfil</label>
						</div>
					</div>

				</div>

				<div class="col m6 s12">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos del acuerdo</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'label'=>false,
								'div'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label for="InstanciaFecha">Fecha</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('instancia_id',array(
								'type'=>'select',
								'options'=>$instancias,
								'empty'=>'Instancia Evaluadora',
								'label'=>false,
								'div'=>false,
								'class'=>'required'
							)); ?>
							<label>
								Instancia a asignar
								<label id="label-instancia" for="InstanciaInstanciaId" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>					

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Andrés Hernández',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="InstanciaJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'label'=>false,
								'div'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
							 	'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="InstanciaCargo" style="display:none;" class="error">* Requerido</label>
							</label>
							
						</div>
					</div>					

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('antecedente',array(
								'label'=>false,
								'div'=>false,
								'required'
							)); ?>
							<label>
								Antecedente de nivel de estudios
								<label for="InstanciaAntecedente" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('periodo',array(
								'label'=>false,
								'div'=>false,
								'value'=>'cuarto periodo de 2015 o primer periodo de 2016 de la Instancia Evaluadora (Centro Nacional de Evaluación para la Educación Superior, A.C.)'
							)); ?>
							<label>
								Periodo
								<label for="InstanciaPeriodo" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="modal-footer fondo-verde">
			<span style="padding-top:12px; display:inline-block;">ASIGNACIÓN A INSTANCIA EVALUADORA</span>
			<button id="submit-instancia" class="btn" type="submit">Admitir</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('Prevencion',array(
	'url'=>'/admin/prevencion'
)); ?>

	<div id="prevencion" class="modal modal-fixed-footer">
		<div class="modal-content">

			<div class="row" style="margin-top:30px;">

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre_solicitante',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="PrevencionNombreSolicitante">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="PrevencionNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="PrevencionPerfil">Pérfil</label>
						</div>
					</div>

				</div>

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos del acuerdo</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'div'=>false,
								'label'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label for="PrevencionFecha">Fecha</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Alicia Loranca',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="PrevencionJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
								'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="PrevencionCargo" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

				</div>

			</div>

			<div class="row" style="margin-top:50px;">
				<div class="col s12">

					<div class="row">
						<div class="col s12 center-align">
							<span class="card-title"><img src="/img/bullets-negro.png" style="width:30px; vertical-align:middle;">&nbsp;&nbsp;Revisión de documentos</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 center-align">
							<span>Selecciona los documentos para notificar al usuario.</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top:30px;">
				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test1" name="1" />
		      				<label for="test1">
		      					21 años de edad
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test2" name="2" />
		      				<label for="test2">
		      					Acta de Nacimiento
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test3" name="3"/>
		      				<label for="test3">
		      					CURP
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test4" name="4"/>
		      				<label for="test4">
		      					Identificación Oficial
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test5" name="5"/>
		      				<label for="test5">
		      					Certificado total de estudios del antecedente académico o revalidación correspondiente
		      				</label>
						</div>
					</div>

				</div>

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test6" name="6"/>
		      				<label for="test6">
		      					Constancia de Honorabilidad emitida por una persona física o moral
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<input type="checkbox" id="test7" name="7"/>
		      				<label for="test7">
		      					CV actualizado, con fotografía y firma
		      				</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('documentos_faltantes',array(
								'div'=>false,
								'label'=>false,
								'type'=>'textarea',
								'class'=>'materialize-textarea required'
							)); ?>
							<label>
								Documentos Faltantes
								<label for="PrevencionDocumentosFaltantes" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

				</div>
			</div>
			
		</div>
		<div class="modal-footer fondo-amarillo">
			<span style="padding-top:12px; display:inline-block;">ACUERDO DE PREVENCIÓN</span>
			<button class="btn" type="submit">Proceder</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('Desechamiento',array(
	'url'=>'/admin/desechamiento'
)); ?>

	<div id="desechamiento" class="modal modal-fixed-footer">
		<div class="modal-content">

			<div class="row" style="margin-top:30px;">

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre_solicitante',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="DesechamientoNombreSolicitante">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="DesechamientoNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="DesechamientoPerfil">Pérfil</label>
						</div>
					</div>
					
				</div>

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos del acuerdo</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'div'=>false,
								'label'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label for="DesechamientoFecha">Fecha</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Alicia Loranca',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="DesechamientoJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
								'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="DesechamientoCargo" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('documentos_faltantes',array(
								'div'=>false,
								'label'=>false,
								'type'=>'textarea',
								'class'=>'materialize-textarea required'
							)); ?>
							<label>
								Documentos Faltantes
								<label for="DesechamientoDocumentosFaltantes" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="modal-footer fondo-rojo white-text">
			<span style="padding-top:12px; display:inline-block;">ACUERDO DE DESECHAMIENTO</span>
			<button class="btn" type="submit">Proceder</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('Incompetencia',array(
	'url'=>'/admin/incompetencia'
)); ?>

	<div id="incompetencia" class="modal modal-fixed-footer">
		<div class="modal-content">

			<div class="row" style="margin-top:30px;">
				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Datos del solicitante</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nombre_solicitante',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Solicitante']['nombre'].' '.$solicitud['Solicitante']['primer_apellido'].' '.$solicitud['Solicitante']['segundo_apellido'],
								'disabled'
							)); ?>
							<label for="IncompetenciaNombreSolicitante">Nombre del solicitante</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('nivel',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['Nivel']['name'],
								'disabled'
							)); ?>
							<label for="IncompetenciaNivel">Nivel</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('perfil',array(
								'div'=>false,
								'label'=>false,
								'value'=>$solicitud['Perfil']['name'],
								'disabled'
							)); ?>
							<label for="IncompetenciaPerfil">Pérfil</label>
						</div>
					</div>

					

				</div>

				<div class="col s6">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/acuerdo-icono.png" style="height:30px; vertical-align:middle;">&nbsp;&nbsp;Datos del acuerdo</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('fecha',array(
								'div'=>false,
								'label'=>false,
								'value'=>date('d-m-Y'),
								'disabled'
							)); ?>
							<label for="IncompetenciaFecha">Fecha</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('jefe_departamento',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Alicia Loranca',
								'class'=>'required'
							)); ?>
							<label>
								Jefe de departamento
								<label for="IncompetenciaJefeDepartamento" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('cargo',array(
								'div'=>false,
								'label'=>false,
								'value'=>'Jefa de Departamento de Procesos Especiales relacionados con el Reconocimiento de Saberes',
								'class'=>'required'
							)); ?>
							<label>
								Cargo
								<label for="IncompetenciaCargo" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 input-field">
							<?php echo $this->Form->input('documentos_faltantes',array(
								'div'=>false,
								'label'=>false,
								'type'=>'textarea',
								'class'=>'materialize-textarea required'
							)); ?>
							<label>
								Documentos Faltantes
								<label for="IncompetenciaDocumentosFaltantes" style="display:none;" class="error">* Requerido</label>
							</label>
						</div>
					</div>

				</div>

			</div>

		</div>
		<div class="modal-footer fondo-rojo white-text">
			<span style="padding-top:12px; display:inline-block;">ACUERDO DE INCOMPETENCIA</span>
			<button class="btn" type="submit">Proceder</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php $this->Html->scriptStart(array('inline'=>false)); ?>

	$(document).ready(function(){
		$('.modal-trigger').leanModal();
	});


	$(document).ready(function() {
		$('select').material_select();
		$('.select-dropdown').attr('name','1');
	});

<?php $this->Html->scriptEnd(); ?>

<?php $this->Html->script('jquery.validate.js',array(
	'inline'=>false
)); ?>

<?php $this->Html->scriptStart(array('inline'=>false)); ?>
	
	$.validator.messages.required = "* Requerido";
	$.validator.messages.email = "*";

	$(document).ready(function() {
		$("#DesechamientoSolicitudForm").validate();
		$("#IncompetenciaSolicitudForm").validate();
		$("#PrevencionSolicitudForm").validate();
		$("#InstanciaSolicitudForm").validate();
		$("#ColegioSolicitudForm").validate();
		$("#ResolucionSolicitudForm").validate();
	});

	$('#submit-instancia').click(function(){
		
		var bandera = true;

		if(!$("#InstanciaSolicitudForm").valid()){
			bandera = false
		}

		if($("#InstanciaInstanciaId").val() == ""){
			bandera = false
			$('#label-instancia').css('display','');
		}else{
			$('#label-instancia').css('display','none');
		}

		return bandera;
	});

	$('#submit-colegio').click(function(){
		
		var bandera = true;

		if(!$("#ColegioSolicitudForm").valid()){
			bandera = false;
		}

		if($("#ColegioColegioId").val() == ""){
			bandera = false
			$('#label-colegio').css('display','');
		}else{
			$('#label-colegio').css('display','none');
		}

		return bandera;
	});

<?php $this->Html->scriptEnd(); ?>