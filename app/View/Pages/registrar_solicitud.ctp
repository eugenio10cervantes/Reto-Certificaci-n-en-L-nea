<style type="text/css">
	.proc-nivel{
		display: block;
		font-weight: bold;
		font-size: 22px;
	}

	.color-gris-claro{
		color: #A0a0a0;
	}

	.carrera{
		display: block;
		font-weight: bold;
		font-size: 26px;
		margin-top: 25px;
	}

	.btn{
		text-transform: inherit;
	}
</style>

<div class="container">
	<div class="row">

		<?php echo $this->Form->create('Solicitude',array(
			'id'=>'RegistroTramite',
			'url'=>'/Sitio/registro_solicitud'
		)); ?>

		<?php echo $this->Form->hidden('solicitante_id',array(
			'value'=>$this->Session->read('Auth.User.id')
		)); ?>

		<?php echo $this->Form->hidden('numero_solicitud',array(
			'value'=>'211/02S.23/DAC/SAC/RSA/P.A-E/00010/2016'
		)); ?>

		<?php echo $this->Form->hidden('administrador_id',array(
			'value'=>6
		)); ?>

		<?php echo $this->Form->hidden('perfil_id',array(
			'value'=>3
		)); ?>

		<div class="col m10 s12 offset-m1" style="background-color: rgb(244,244,244); border-radius:30px;">

			<div class="row">
				<div class="col s10 offset-s1">

					<div class="row">
						<div class="col s12 center-align">
							<h1 class="color-gris-claro"><img src="/img/certificado-negro-gris.png" style="vertical-align:middle; width:40px;"> Registro de Solicitud</h1>

							<span class="color-gris-claro proc-nivel">Procedimiento General</span>
							<span class="color-gris-claro proc-nivel">Técnico Superior Universitario</span>
							<span class="carrera color-gris-oscuro">Piloto Aviador</span>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<h1 class="color-gris-oscuro"><?php echo $this->Session->read('Auth.User.nombre').' '.$this->Session->read('Auth.User.primer_apellido').' '.$this->Session->read('Auth.User.segundo_apellido'); ?></h1>
						</div>
					</div>

					<div class="row" style="margin-bottom:50px;">
						<div class="col s6 input-field">
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
									'Sin Localidad'=>'Sin Localidad',
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
								'label'=>false,
								'div'=>false,
								'required'
							)); ?>
							<label>Entidad donde se realizará le trámite <span id="registro-label-error" class="error" style="display:none; color:red;">* Requerido</span></label>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<h1 class="color-gris-claro" style="margin:0px; font-size:22px;">Documentación</h1>
						</div>
					</div>

					<div class="row" style="margin-bottom:50px;">
						<div class="col s6">
							<p class="color-gris-oscuro" style="margin:0px;">
								Cuida la legibilidad, definición y resolución de los documentos, te recomendamos subir tus formatos de preferencia por via escáner o en fotografía con buena iluminación y un buen enfoque, ya que tus datos serán procesados manualmente.
							</p>
						</div>
						<div class="col s6">
							<div class="row" style="margin-top:40px;">
								<div class="col s6 right-align">
									<img src="/img/hola-blur.png" style="display: inline; width:60%;">
								</div>
								<div class="col s6 left-align">
									<img src="/img/hola-bien.png" style="display: inline; width:60%;">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>Acta de Nacimiento <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a1" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>CURP <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a2" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>Identificación Oficial <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_3">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a3" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>Certificado de Estudios <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_4">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a4" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>Constancia de Honorabilidad <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_5">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a5" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col s12 file-field input-field">
							<div class="btn btn-negro" style="padding-bottom:50px;">
								<span>CV actualizado <i class="material-icons">attach_file</i></span>
								<input type="file" class="required" name="archivo_6">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" name="a6" placeholder="Agregar">
							</div>
						</div>
					</div>

					<div class="row" style="margin-top: 80px;">
						<div class="col s12 center-align">
							<button class="btn btn-negro" tyoe="submit">Iniciar trámite</button>
						</div>
					</div>

				</div>
			</div>

		</div>

		<?php echo $this->Form->end(); ?>

	</div>
</div>

<?php $this->Html->scriptStart(array('inline'=>false)); ?>

	$(document).ready(function() {
		$('select').material_select();

	});

	$( "#RegistroTramite" ).validate({

	});

	$('#RegistroTramite').submit(function(){

		var flag = true;

		if($('#SolicitudeEntidadFederativa').val() == ""){
			$('#registro-label-error').css('display','');
			flag = false;
		}else{
			$('#registro-label-error').css('display','none');
		}

		return flag;


	});

<?php $this->Html->scriptEnd(); ?>