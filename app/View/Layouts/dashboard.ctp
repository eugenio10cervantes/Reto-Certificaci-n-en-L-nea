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


		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php echo $this->fetch('css'); ?>
	</head>

	<body>


		<div id="header">
			<div class="row hide-on-small-only" style="margin-bottom:0px;">

				<div id="container-header-izquierda" class="col l4 m4 s12 center-align">
					<a href="/">
						<img src="/img/micertificado-logo-menu.png" width="250">
					</a>
				</div>

				<div id="container-header-derecha" class="col l8 m8 s12">
					<div class="tabla">
						<div class="celda right-align">

							<div class="col m8">
								<a href="/certificados" class="dash-gris-fuerte">Certificados</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/informacion" class="dash-gris-fuerte">Información</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/" class="dash-gris-neutro">acerca de</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/" class="dash-gris-neutro">ayuda</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/" class="dash-gris-neutro">contacto</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>

							<div id="dash-header-nombre" class="col m1" style="margin-top:-6px;">
								<img src="/img/usuario-logo-negro.png" width="30">
							</div>

							<div class="col m3 left-align dash-gris-fuerte">
								<b>
									<?php echo $datos_usuario['nombre']." ".$datos_usuario['primer_apellido']; ?>.
								</b>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="dash-back-gris" style="padding-bottom:30px;">
			<div class="container center-align">

				<div class="dash-color-gris-claro">
					Bienvenido
				</div>

				<div style="display:table;" class="center-block">
					<img src="/img/usuario-logo-gris.png" width="70">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="celda dash-gris-neutro" style="width:auto; font-size:40px;">
						<?php echo $datos_usuario['nombre']." ".$datos_usuario['primer_apellido']; ?>.
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col m6 offset-m3 center-align">
					<div class="dash-color-gris-claro">
						<div class="col m6">
							<a href="/usuario_solicitud"
								<?php if ($pagina == "usuario_solicitud")
								{
									echo 'class="dash-seleccionado"';
								} ?>>

								Solicitudes / proceso
							</a>
						</div>
						<div class="col m6">
							<a href="/usuario_micertificado"
								<?php if ($pagina == "usuario_micertificado")
								{
									echo 'class="dash-seleccionado"';
								} ?>>

								Mi Certificado
							</a>
						</div>
					</div>
				</div>

				<div class="col m3">
					<div id="dash-notificaciones">
						<a href="/usuario_notificaciones" style="display:table;">
							<img src="/img/notificacion-activa.png" width="50">
							<div class="celda" style="padding-left:10px;">
								Tienes 3<br>notificaciones
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>



		

		<?php echo $this->fetch('content'); ?>





		<div class="container">
			<div class="row">
				<div class="col l12 m12 s12 center-align">
					<a href="http://sep.gob.mx/">
						<img src="/img/logos/logo-sep.png" id="logo-sep-footer">
					</a>
				</div>
			</div>
		</div>



		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="/js/materialize.min.js"></script>
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
	</body>
</html>