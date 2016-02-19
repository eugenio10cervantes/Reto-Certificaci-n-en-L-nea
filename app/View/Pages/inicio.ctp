
<?php $datos_usuario = $this->Session->read('Auth.User'); ?>

<div class="fondo-gris-claro">
	<div class="container">
		<div class="row" style="padding-top: 50px;">
			<div class="col m12 s12 center-align">
				<img src="/img/micertificado-promocional.gif" class="banner-inicial-logo">
			</div>
		</div>

		<div class="row" style="padding-top: 25px; padding-bottom: 25px; margin-bottom:0px;">
			<div class="col m12 s12 center-align">
				<img src="/img/logos/logo-sep.png" class="banner-sep-logo">
			</div>
		</div>
	</div>
</div>

<div class="fondo-gris-oscuro borde-inferior-izquierdo-redondo borde-inferior-derecho-redondo">
	<div class="container">

		<!-- Vista desktop -->
		<div class="row hide-on-small-only" style="padding-top:50px; padding-bottom:50px;">
			<div class="col m4 s12" id="home-registrate-left">
				<h1 style="margin-top: 0px;">regístrate<span class="color-verde">.</span></h1>
				<h2>Obten tu certificación y comprueba tu estudio</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				<a href="#" class="color-verde font-bold">Consulta las bases</a>
			</div>
			<div class="col m2 s12">
				<div class="tabla">
					<div id="home-registrate-center" class="celda center-align">
						<img src="/img/certificado-blanco.png" style="max-width:100%; width:65px;">
					</div>
				</div>
			</div>
			<div class="col m4 s12 offset-m2 center-align">
				<div class="tabla">
					<div id="home-registrate-right" class="celda center-align">
						<h2 style="margin-top:0px;">Inicia tu tramite</h2>
						<a href="#" class="btn btn-verde" style="font-size:22px; padding-left:35px; padding-right:35px; padding-top:5px; padding-bottom:5px;">regístrate</a>
						<p style="color:#939393;">Regístrate para iniciar tu trámite<br>y poder certificarte.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin vista desktop -->

		<!-- Vista movil -->
		<div class="hide-on-med-and-up" style="padding-top: 20px; padding-bottom: 3px;">
			<div class="row">
				<div class="col s12 center-align">
					<span class="color-blanco font-bold" style="display:block;">Inicia tu trámite</span>
					<br>
					<a href="#" class="btn btn-verde font-bold" style="padding: 10px; font-size:22px; padding-left:30px; padding-right:30px;">registrate</a>
				</div>
			</div>
			<div class="row">
				<div class="col s3 center-align">
					<img src="/img/certificado-blanco.png" style="width:60px; display:inline-block; vertical-align:middle;">
				</div>
				<div class="col s9" style="padding-top:12px;">
					<h2 style="margin-top:10px; margin-bottom:0px; font-size: 16px;">Obtén una certificación y comprueba tu estudio</h2>
				</div>
			</div>
			<div class="row">
				<div class="col s10 offset-s1 center-align">
					<p>Regístrate para iniciar tu trámite</p>
				</div>
			</div>
		</div>
		<!-- Fin vista movil -->

	</div>
</div>

<?php $this->Html->scriptStart(array('inline' => false)); ?>
	
	$(window).resize(function(){
		var alto = $('#home-registrate-left').height();
		$('#home-registrate-center').css('height',alto+'px');
		$('#home-registrate-right').css('height',alto+'px');
	});
	
	$(window).load(function() {
		var alto = $('#home-registrate-left').height();
		$('#home-registrate-center').css('height',alto+'px');
		$('#home-registrate-right').css('height',alto+'px');
	});	

<?php $this->Html->scriptEnd(); ?>

<div class="container" style="padding-top: 50px; padding-bottom:50px;">
	<div class="row">
		<div class="col l3 m4 s10 offset-l3 offset-s1">
			<h1 class="color-gris-oscuro" style="margin-top: 0px;">¿cómo obtener mi certificado en línea?</h1>
		</div>
		<div class="col l3 m4 s12">
			<p class="color-gris-oscuro" style="margin-top: 0px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="hide-on-med-and-up center-align">
				<a href="#" class="font-bold color-verde">Consulta las bases</a>
			</div>
			<div class="hide-on-small-only">
				<a href="#" class="font-bold color-gris-oscuro">Consulta las bases</a>
			</div>
		</div>
	</div>
</div>

<div class="fondo-gris-claro">
	<div class="container">

		<!-- Vista desktop -->
		<div class="row hide-on-small-only" style="padding-top: 45px; padding-bottom: 45px;">
			<div class="col m4 s12">
				<div class="center-align">
					<ul id="imagen-1">
						<li style="opacity:0;"><img src="/img/bullets.gif" style="width:200px;"></li>
					</ul>
				</div>
				<span class="titulo-bullets-imagenes">
		  			Regístrate
		  		</span>
				<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="color-gris-oscuro font-bold">leer más</a>
			</div>
			<div class="col m4 s12">
				<div class="center-align">
					<ul id="imagen-2">
						<li style="opacity:0;"><img src="/img/lapiz.gif" style="width:200px;"></li>
					</ul>
				</div>
				<span class="titulo-bullets-imagenes">
		  			Demuestra tu conocimiento
		  		</span>
				<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="color-gris-oscuro font-bold">leer más</a>
			</div>
			<div class="col m4 s12">
				<div class="center-align">
					<ul id="imagen-3">
						<li style="opacity:0;"><img src="/img/certificado.gif" style="width:200px;"></li>
					</ul>
				</div>
				<span class="titulo-bullets-imagenes">
		  			Obtén tu certificado
		  		</span>
				<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="color-gris-oscuro font-bold">leer más</a>
			</div>
		</div>
		<!-- Fin vista desktop -->

		<?php $this->Html->scriptStart(array('inline'=>false)); ?>

			$(document).ready(function(){
				var options = [
					{selector: '#imagen-1', offset: 400, callback: 'Materialize.showStaggeredList("#imagen-1")' },
					{selector: '#imagen-2', offset: 400, callback: 'Materialize.showStaggeredList("#imagen-2")' },
					{selector: '#imagen-3', offset: 400, callback: 'Materialize.showStaggeredList("#imagen-3")' },
				];
				Materialize.scrollFire(options);
			});

		<?php $this->Html->scriptEnd(); ?>

		<!-- Vista movil -->

		<?php $this->HTML->script('owl.carousel.min',array(
			'inline' => false
		)); ?>

		<?php echo $this->HTML->css('owl.carousel',array('inline'=>false)); ?>

		<?php echo $this->HTML->css('owl.theme',array('inline'=>false)); ?>

		<div class="row hide-on-med-and-up" style="margin-bottom:0px; padding-top: 25px; padding-bottom: 25px;">
			<div class="col s12">
				<div class="owl-carousel" id="inicio-imagenes">
				  	<div>
					  	<div class="center-align" style="width:100%;">
					  		<img src="/img/bullets.gif">
						</div>
						<span class="titulo-bullets-imagenes">
				  			Registrate
				  		</span>
						<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="#" class="color-gris-oscuro font-bold">leer más</a>
				  	</div>

				  	<div>
					  	<div class="center-align" style="width:100%;">
					  		<img src="/img/lapiz.gif">
						</div>
						<span class="titulo-bullets-imagenes">
				  			Demuestra tu conocimiento
				  		</span>
						<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="#" class="color-gris-oscuro font-bold">leer más</a>
				  	</div>

				  	<div>
					  	<div class="center-align" style="width:100%;">
					  		<img src="/img/certificado.gif">
						</div>
						<span class="titulo-bullets-imagenes">
				  			Obtén tu certificado
				  		</span>
						<p class="color-gris-oscuro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="#" class="color-gris-oscuro font-bold">leer más</a>
				  	</div>
				</div>

				<?php $this->Html->scriptStart(array('inline' => false)); ?>

					$(document).ready(function(){
					  	$('.owl-carousel').owlCarousel({
							loop:true,
							margin:10,
							nav:false,
							responsive:{
								0:{
									items:1
								},
								600:{
									items:1
								},
								1000:{
									items:1
								}
							}
						});
					});

				<?php $this->Html->scriptEnd(); ?>

			</div>
		</div>

		<!-- Fin vista movil -->
	</div>
</div>

<div class="container">

	<!-- Vista desktop -->
	<div class="row hide-on-small-only">
		<div class="col m4 s4">
			<h1 class="color-gris-oscuro">
				Certificados<span class="color-verde">.</span>
			</h1>
		</div>
	</div>

	<div class="row hide-on-small-only">
		<div class="col m4 s4 elementos-individuales">
			<h2 class="color-gris-oscuro">Educación Básica</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Secundaria</a>

			<h2 class="color-gris-oscuro">Educación Media Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Bachillerato</a>

			<h2 class="color-gris-oscuro">Técnico Superior Universitario</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Piloto Aviador</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Policía Investigador</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Comercialización Inmobiliarira</a>
		</div>

		<div class="col m4 s4 elementos-individuales">
			<h2 class="color-gris-oscuro">Educación Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Comercio y Negocios Internacionales</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Mercadotecnia</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Pedagogía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias de la Educación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Turismo</a>
			<a href="/certificados" class="link-certificados color-verde">...</a>
		</div>

		<div class="col m4 s4 elementos-individuales">
			<h2 class="color-gris-oscuro">Superior</h2>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Actuación</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Cinematografía</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Administración</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Administración Pública</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Ciencias Religiosas</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Teología</a>
			<a href="#modal-piloto" class="color-gris-oscuro modal-trigger">Interpretación</a>
			<a href="/certificados" class="link-certificados color-verde">...</a>
		</div>
	</div>
	<!-- Fin vista desktop -->

	<!-- Vista movil -->
	<div class="row hide-on-med-and-up" style="margin-top: 50px; margin-bottom:25px;">
		<div class="col s12 center-align">
			<a href="/certificados" class="color-gris-oscuro font-bold" style="font-size:26px;">ver certificados</a>
		</div>
	</div>
	<!-- Fin vista movil -->

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

		<div class="row">
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