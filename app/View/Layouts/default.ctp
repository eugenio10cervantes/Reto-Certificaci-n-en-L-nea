<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			Portal Mi Certificado En Línea
		</title>

		<meta charset="UTF-8">
		
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="/css/estilo-r.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="/css/estilo.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="/css/estilo-small.css"  media="screen,projection"/>
		<link rel="icon" type="image/png" href="/img/favicon-64.png" />

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-73883423-1', 'auto');
		  ga('send', 'page view');

		</script>


		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php echo $this->fetch('css'); ?>
	</head>
	<body>

		<?php $datos_usuario = $this->Session->read('Auth.User'); ?>

		<div id="header">
			<div class="row hide-on-small-only" style="margin-bottom:0px;">
				<div id="container-header-izquierda" class="col l4 m4 s12 center-align">
					<a href="/">
						<img src="/img/micertificado-logo-menu.png" id="logo-header">
					</a>
				</div>
				<div id="container-header-derecha" class="col l8 m8 s12">
					<div class="tabla">
						<div class="celda right-align">
							<a href="/certificados" class="color-negro">Certificados</a>
							&nbsp;&nbsp;
							<a href="/informacion" class="color-negro">Información</a>
							&nbsp;&nbsp;

							<?php if ($datos_usuario == null): ?>
								
								<button class="center-block btn" id="default-iniciar-sesion">
									iniciar sesión
								</button>
								
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/registro" class="bold">registrate</a>

							<?php else: ?>
								
								<button class="center-block btn" id="default-cerrar-sesion">
									<?php echo $datos_usuario['nombre']." ".$datos_usuario['primer_apellido']; ?>.
								</button>
								
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/usuario_inicia" class="bold">solicitudes</a>

							<?php endif ?>

						</div>
					</div>
				</div>
			</div>
			<div class="row hide-on-med-and-up">
				<div class="row">
					<div class="col s3">
						<i class="material-icons" style="font-size:35px; color:#515151;">dehaze</i>
					</div>
					<div class="col s9 right-align">

						<?php if ($datos_usuario == null): ?>
						
							<a class="btn" id="default-iniciar-sesion-movil">Iniciar sesión</a>
							&nbsp;&nbsp;
							<a href="/registro" class="color-gris-oscuro font-bold" style="font-size:10px;">registrate</a>

						<?php else: ?>
							
							<button class="center-block btn" id="default-cerrar-sesion-movil">
								<?php echo $datos_usuario['nombre']." ".$datos_usuario['primer_apellido']; ?>.
							</button>
							
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="/usuario_inicia" class="bold">solicitudes</a>

						<?php endif ?>
					</div>
				</div>
			</div>
		</div>

		<?php $this->Html->scriptStart(array('inline'=>false)); ?>

			var login_abierto = false;
			var login_abierto_cerrar = false;
			var acaba_abrir = false;

			$(document).mouseup(function (e){
				var container = $("#dropdown-login");
				var container2 = $("#dropdown-login-cerrar");

				if (!container.is(e.target) && container.has(e.target).length === 0){

					var container = $(".dropdown-button");

					if (!container.is(e.target) && container.has(e.target).length === 0){
						if(login_abierto){
							$('#dropdown-login').fadeOut();
						}
						login_abierto = false;
					}
				}

				if (!container2.is(e.target) && container2.has(e.target).length === 0){

					var container2 = $(".dropdown-button");

					if (!container2.is(e.target) && container2.has(e.target).length === 0){
						if(login_abierto_cerrar){
							$('#dropdown-login-cerrar').fadeOut();
						}
						login_abierto_cerrar = false;
					}
				}
			});

			$('#default-iniciar-sesion').click(function(){

				if(!login_abierto){
					//get the position of the placeholder element  
					var pos = $(this).offset();    
					var eWidth = $(this).outerWidth();
					var mWidth = $('#dropdown-login').outerWidth();
					var left = (pos.left + eWidth - mWidth) + "px";
					var top = 30+pos.top;
					top = top + "px";
					//show the menu directly over the placeholder  
					$('#dropdown-login').css( { 
						position: 'absolute',
						zIndex: 5000,
						left: left, 
						top: top
					} );

					$('#dropdown-login').hide().fadeIn();
					login_abierto = true;
				}

			});

			$('#default-cerrar-sesion').click(function(){

				if(!login_abierto_cerrar){
					//get the position of the placeholder element  
					var pos = $(this).offset();    
					var eWidth = $(this).outerWidth();
					var mWidth = $('#dropdown-login-cerrar').outerWidth();
					var left = (pos.left + eWidth - mWidth) + "px";
					var top = 30+pos.top;
					top = top + "px";
					//show the menu directly over the placeholder  
					$('#dropdown-login-cerrar').css( { 
						position: 'absolute',
						zIndex: 5000,
						left: left, 
						top: top
					} );

					$('#dropdown-login-cerrar').hide().fadeIn();
					login_abierto_cerrar = true;
				}

			});


		<?php $this->Html->scriptEnd(); ?>

		<ul id='dropdown-login' style="display:none; background-color:white; width:360px; border-radius: 30px;">
			<li>
				
				<?php echo $this->Form->create('User',array(
					'id'=>'FormaLogin',
					'url'=>'/Users/login'
				)); ?>

					<div class="row" style="margin:0px;">

						<div class="input-field col s12">

							<?php echo $this->Form->input('username',array(
								'div'=>false,
								'label'=>false,
								'id'=>'LoginUserName'
							)); ?>

							<label for="UserUsername">Correo electrónico</label>

						</div>
						
					</div>

					<div class="row" style="margin:0px;">

						<div class="input-field col s12">

							<?php echo $this->Form->input('password',array(
								'div'=>false,
								'label'=>false,
								'id'=>'LoginPassword'
							)); ?>

							<label for="UserPassword">Contraseña</label>

						</div>
						
					</div>

					<div class="row" style="margin-top:20px;">
						<div class="col s6">
							<a href="#">¿Olvidaste tu contraseña?</a>
						</div>
						<div class="col s6 right-align">
							<button class="btn btn-negro" type="submit">Ingresar</button>
						</div>
					</div>

				<?php echo $this->Form->end(); ?>

				
			</li>
		</ul>

		<ul id='dropdown-login-cerrar' style="display:none; background-color:white; width:160px; border-radius: 30px;">
			<li>
				<div class="row" style="margin-top:20px;">
					<div class="col s12 center-align">
						<a href="/users/logout"><button class="btn btn-negro">Cerrar</button></a>
					</div>
				</div>
			</li>
		</ul>

		<?php echo $this->fetch('content'); ?>

		<div class="container">
			<div class="row" style="margin-top:100px;">
				<div class="col l12 m12 s12 center-align">
					<a href="http://sep.gob.mx/">
						<img src="/img/logos/logo-sep.png" id="logo-sep-footer">
					</a>
				</div>
			</div>
		</div>

	</body>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/messages_es.js"></script>
	<?php echo $this->fetch('script'); ?>

	<script type="text/javascript">
		$(window).resize(function(){
			var alto = $('#container-header-izquierda').height();
			$('#container-header-derecha .celda').css('height',alto+"px");
		});
		
		$(window).load(function() {
			var alto = $('#container-header-izquierda').height();
			$('#container-header-derecha .celda').css('height',alto+"px");
		});

	</script>
</html>
