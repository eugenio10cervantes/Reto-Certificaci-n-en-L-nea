
<?php $datos_usuario = $this->Session->read('Auth.User'); ?>

<div class="fondo-gris-claro">
	<div class="container">
		<div class="row" style="padding-top: 50px;">
			<div class="col m12 s12 center-align">
				<img src="/img/certificados.png" style="width:400px; max-width:100%;">
			</div>
		</div>

		<div class="row" style="padding-bottom: 25px; margin-bottom:0px;">
			<div class="col m12 s12 center-align">
				<img src="/img/logos/logo-sep.png" class="banner-sep-logo">
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top:50px;">

	<div class="row">
		<div class="col m4 s12 elementos-individuales">
			<h2 class="color-gris-oscuro">Educación Básica</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Secundaria</a>

			<h2 class="color-gris-oscuro">Educación Media Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Bachillerato</a>

			<h2 class="color-gris-oscuro">Técnico Superior Universitario</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Piloto Aviador</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Policía Investigador</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Comercialización Inmobiliarira</a>
		</div>

		<div class="col m4 s12 elementos-individuales">
			<h2 class="color-gris-oscuro">Educación Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Comercio y Negocios Internacionales</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Mercadotecnia</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Pedagogía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias de la Educación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Turismo</a>
			
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Administración e Informática</a>
			
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Actuaría</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Agronómica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Civil</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Eléctrica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Electrónica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Industrial</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Mecánica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Mecánica-Eléctrica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Derecho</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Contaduría</a>

			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Matemáticas</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Computacional</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Mecatrónica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería de Software</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ingeniería Topográfica</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias de la Comunicación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Economía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Sociología</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Cinematografía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Diseño y Publicidad en Moda</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Filosofía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Historia</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Educación Primaria</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Educación Indígena</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias Computacionales</a>

			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Educación Preescolar</a>
		</div>

		<div class="col m4 s12 elementos-individuales">
			<h2 class="color-gris-oscuro">Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Actuación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Cinematografía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Administración</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Administración Pública</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias Religiosas</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Teología</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Interpretación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Comercio Exterior y Aduanas</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Dirección Orquestal</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Educación Preescolar</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Educación Primaria</a>
		</div>
	</div>
</div>

<?php $this->Html->scriptStart(array('inline' => false)); ?>

	$(document).ready(function(){
		// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		$('.modal-trigger').leanModal({
			dismissible: true, // Modal can be dismissed by clicking outside of the modal
			opacity: .5, // Opacity of modal background
			in_duration: 300, // Transition in duration
			out_duration: 200, // Transition out duration
			ready: function() { var alto = $('#info-documentos').height(); $('#info-registrate').css('height',alto+'px'); }, // Callback for Modal open
			complete: function() { } // Callback for Modal close
		});
	});

<?php $this->Html->scriptEnd(); ?>

<!-- Modal Carreras -->
<div id="modal-piloto" class="modal">
	<div class="modal-content">
		<div class="row">
			<div class="col s12 center-align">
				<img src="/img/certificado-negro-gris.png" style="width:35px; display:inline-block; vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<h1 class="left-align" style="max-width:200px; margin-top:0px; vertical-align: middle; display:inline-block; margin-bottom:0px; font-size:20px; color:#A0A0A0;">Técnico Superior Universitario</h1>
				<h2 class="color-gris-oscuro" style="margin-bottom:0px; margin-top:30px;">Procedimiento General</h2>
				<h2 class="color-gris-oscuro" style="margin-bottom:0px;">Piloto Aviador</h2>
			</div>
		</div>

		<div class="row hide-on-small-only">
			<div id="info-documentos" class="col s6">
				<h2 class="color-gris-oscuro">Requisitos y documentos:</h2>
				<ul>
					<li>Tener mínimo 21 años de edad.</li>
					<li>Acta de Nacimiento.</li>
					<li>CURP.</li>
					<li>Identificación Oficial.</li>
					<li>Certificado total de estudios del antecedente académico o revalidación correspondiente.</li>
					<li>Constancia de Honorabilidad emitida por una persona física o moral.</li>
					<li>CV actualizado, con fotografía y firma.</li>
				</ul>
				<span class="color-rojo">* Todos los requisitos son obligatorios.</span>
			</div>
			<div class="col s6">
				<div class="tabla">
					<div id="info-registrate" class="celda center-align">

						<?php if ($datos_usuario == null): ?>

							<span class="color-gris-claro">inicia tu trámite</span>
							<br>
							<a href="#" class="btn btn-negro">regístrate</a>
							<p class="color-gris-oscuro">Regístrate para iniciar tu trámite de certificación.</p>

						<?php else: ?>
							
							<a href="/solicita_tramite" class="btn btn-negro">inicia tu tramite</a>

						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>

		<div class="hide-on-med-and-up">
			<div id="info-documentos" class="col s12">
				<h2 class="color-gris-oscuro">Requisitos y documentos:</h2>
				<ul>
					<li>Tener mínimo 21 años de edad.</li>
					<li>Acta de Nacimiento.</li>
					<li>CURP.</li>
					<li>Identificación Oficial.</li>
					<li>Certificado total de estudios del antecedente académico o revalidación correspondiente.</li>
					<li>Constancia de Honorabilidad emitida por una persona física o moral.</li>
					<li>CV actualizado, con fotografía y firma.</li>
				</ul>
				<span class="color-rojo">* Todos los requisitos son obligatorios.</span>
			</div>
			<div class="col s12">
				<div class="tabla">
					<div id="info-registrate" class="celda center-align" style="padding-top:50px;">

						<?php if ($datos_usuario == null): ?>

							<span class="color-gris-claro">inicia tu trámite</span>
							<br>
							<a href="#" class="btn btn-negro" style="padding: 10px 50px 10px 50px;">regístrate</a>
							<p class="color-gris-oscuro">Regístrate para iniciar tu trámite de certificación.</p>

						<?php else: ?>
							
							<a href="/solicita_tramite" class="btn btn-negro" style="padding: 10px 50px 10px 50px;">inicia tu tramite</a>

						<?php endif ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->Html->scriptStart(array('inline' => false)); ?>

	$(window).resize(function(){
		var alto = $('#info-documentos').height();
		$('#info-registrate').css('height',alto+'px');
	});
	
	$(window).load(function() {
		var alto = $('#info-documentos').height();
		$('#info-registrate').css('height',alto+'px');
	});	

<?php $this->Html->scriptEnd(); ?>