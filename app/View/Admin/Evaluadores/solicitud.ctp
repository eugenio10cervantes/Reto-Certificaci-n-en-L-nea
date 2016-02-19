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

	<div class="row">

		<div class="col s12 center-align">
			<!--
			<div class="row">
				<span class="color-gris-oscuro">Admitir y asignar a</span>
			</div>
			-->
			<div class="row">
				<div class="col s12">
					<a href="#resolucion" class="btn btn-verde modal-trigger">Evaluar</a>
				</div>
			</div>
		</div>

	</div>

</div>





<?php echo $this->Form->create('Evaluacion',array(
	'url'=>'/admin/evaluacion'
)); ?>

	<div id="resolucion" class="modal modal-fixed-footer">
		<div class="modal-content">

			<div class="row" style="margin-top:30px;">
				<div class="col m10 s12 offset-m1">

					<div class="row">
						<div class="col s12">
							<span class="card-title"><img src="/img/usuario-logo-negro.png" style="width:35px; vertical-align:middle;">&nbsp;&nbsp;Evaluación</span>
						</div>
					</div>

					<?php echo $this->Form->hidden('solicitud_id',array('value'=>$solicitud['Solicitude']['id'])); ?>

					<label for="a" generated="true" class="error" style="display:none;">* Requerido</label>

					<div class="row">
						<div class="col s12">

							<div class="file-field input-field">
								<div class="btn">
									<span>Dictamen</span>
									<input type="file" name="a" class="required">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" name="b">
								</div>
							</div>

						</div>
					</div>

					
					<label for="data[Evaluacion][evaluacion_1]" generated="true" class="error" style="display:none;">* Requerido</label>
					

					<div class="row">
						<div class="col s6">
							<input name="data[Evaluacion][evaluacion_1]" type="radio" id="evaluacion_1_a" class="required" value="Aprobatoria"/>
      						<label for="evaluacion_1_a">Aprobado</label>
						</div>
						<div class="col s6">
							<input name="data[Evaluacion][evaluacion_1]" type="radio" id="evaluacion_1_b" value="No aprobatoria"/>
      						<label for="evaluacion_1_b">No aprobado</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 right-align">
							<a id="agregar_segundo" style="cursor:pointer;">Agregar otra evaluación</a>
						</div>
					</div>

					<div id="segundo-bloque" style="display:none;">

						<label for="segundo-input" generated="true" class="error" style="display:none;">* Requerido</label>

						<div class="row">
							<div class="col s12">

								<div class="file-field input-field">
									<div class="btn">
										<span>Dictamen</span>
										<input type="file" name="xa" id="segundo-input">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" name="xb">
									</div>
								</div>

							</div>
						</div>

						<label for="data[Evaluacion][evaluacion_2]" generated="true" class="error" style="display:none;">* Requerido</label>

						<div class="row">
							<div class="col s6">
								<input name="data[Evaluacion][evaluacion_2]" type="hidden" />
								<input name="data[Evaluacion][evaluacion_3]" type="hidden" />
								<input name="data[Evaluacion][evaluacion_2]" type="radio" id="evaluacion_2_a" value="Aprobatoria"/>
	      						<label for="evaluacion_2_a">Aprobado</label>
							</div>
							<div class="col s6">
								<input name="data[Evaluacion][evaluacion_2]" type="radio" id="evaluacion_2_b" value="No aprobatoria"/>
	      						<label for="evaluacion_2_b">No aprobado</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12 right-align">
								<a id="agregar_tercero" style="cursor:pointer; display:block;">Agregar otra evaluación</a>
								<a id="quitar_segundo" style="cursor:pointer; display:block">Quitar evaluación</a>
							</div>
						</div>

					</div>

					<div id="tercer-bloque" style="display:none;">

						<label for="tercer-input" generated="true" class="error" style="display:none;">* Requerido</label>

						<div class="row">
							<div class="col s12">

								<div class="file-field input-field">
									<div class="btn">
										<span>Dictamen</span>
										<input type="file" name="adxa" id="tercer-input">
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" type="text" name="xb">
									</div>
								</div>

							</div>
						</div>

						<label for="data[Evaluacion][evaluacion_3]" generated="true" class="error" style="display:none;">* Requerido</label>

						<div class="row">
							<div class="col s6">
								<input name="data[Evaluacion][evaluacion_3]" type="radio" id="evaluacion_3_a" value="Aprobatoria"/>
	      						<label for="evaluacion_3_a">Aprobado</label>
							</div>
							<div class="col s6">
								<input name="data[Evaluacion][evaluacion_3]" type="radio" id="evaluacion_3_b" value="No aprobatoria"/>
	      						<label for="evaluacion_3_b">No aprobado</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12 right-align">
								<a id="quitar_tercero" style="cursor:pointer; display:block">Quitar evaluación</a>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>
		<div class="modal-footer fondo-verde">
			<span style="padding-top:12px; display:inline-block;">DICTÁMEN</span>
			<button class="btn" type="submit">Cargar dictamen</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?>

<?php $this->Html->script('jquery.validate.js',array(
	'inline'=>false
)); ?>

<?php $this->Html->scriptStart(array('inline'=>false)); ?>

	$.validator.messages.required = "* Requerido";
	$.validator.messages.email = "*";

	$('#agregar_segundo').click(function(){
		$('#segundo-bloque').css('display','');
		$('#evaluacion_2_a').addClass('required');
		$('#segundo-input').addClass('required');
		$(this).css('display','none');
		$('#quitar_segundo').css('display','block');
	});

	$('#quitar_segundo').click(function(){
		$('#segundo-bloque').css('display','none');
		$('#evaluacion_2_a').removeClass('required');
		$('#segundo-input').removeClass('required');
		$(this).css('display','none');
		$('#agregar_segundo').css('display','');
	});

	$('#agregar_tercero').click(function(){
		$('#tercer-bloque').css('display','');
		$('#evaluacion_3_a').addClass('required');
		$('#tercer-input').addClass('required');
		$(this).css('display','none');
		$('#quitar_tercero').css('display','');
		$('#quitar_segundo').css('display','none');
	});

	$('#quitar_tercero').click(function(){
		$('#tercer-bloque').css('display','none');
		$('#evaluacion_3_a').removeClass('required');
		$('#tercer-input').removeClass('required');
		$(this).css('display','none');
		$('#agregar_tercero').css('display','');
		$('#quitar_segundo').css('display','block');
	});

	$(document).ready(function(){
		$('.modal-trigger').leanModal();
		$("#ColegioSolicitudForm").validate();
	});


	$(document).ready(function() {
		$('select').material_select();
	});

<?php $this->Html->scriptEnd(); ?>