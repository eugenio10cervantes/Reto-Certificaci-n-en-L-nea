<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			Portal Mi Certificado En Línea | Admin
		</title>

		<meta charset="UTF-8">
		
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="/css/admin.css">
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

		<div style="background-color: black; padding-top:15px; padding-bottom:15px;">
			<div class="row" style="margin-bottom:0px;">
				<div class="col m2">
					<img src="/img/iconos/usuario-logo-blanco.png" style="width:45px;">
				</div>
				<div class="col m10">

					<div class="menu-admin">
						
						<div style="border:none;">
							<img src="/img/iconos/notificacion-activa.png" style="width:40px; display:inline;">
						</div>						
						<div class="left-align">
							<a href="#" style="padding:0px;"><?php echo $this->Session->read('Auth.User.nombre').' '.$this->Session->read('Auth.User.primer_apellido'); ?></a>
							<span style="display:block;">
								<?php echo $this->Session->read('Auth.User.role'); ?>
							</span>
						</div>
						<div style="border: none; padding-right:0px;">
							•
						</div>
						<div>
							<a href="/admin/reportes">Reportes</a>
						</div>
						<div>
							<a href="/admin/citas">Citas</a>
						</div>
						<div>
							<a href="/admin/solicitudes">Solicitudes</a>
						</div>
						<div>
							<a class='dropdown-button' href='#' data-activates='dropdown-catalogos'>Catálogos</a>
						</div>
						<div>
							<a href="/admin/usuarios">Usuarios</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Dropdown Structure -->
		<ul id='dropdown-catalogos' class='dropdown-content'>
			<li><a href="/admin/procedimientos">Tipos de procedimiento</a></li>
			<li><a href="/admin/niveles">Niveles</a></li>
			<li><a href="/admin/perfiles">Perfiles</a></li>
			<li class="divider"></li>
			<li><a href="/admin/usuarios">Usuarios</a></li>
		</ul>

		<?php echo $this->fetch('content'); ?>


		<div class="row" style="background-color: white; margin:0px; padding-top:30px; padding-bottom:30px; margin-top:50px;">
			<div class="col s12 center-align">
				<img src="/img/logos/logo-sep.png" style="max-width:100%; width:300px; display:inline;">
			</div>
		</div>

	</body>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<?php echo $this->fetch('script'); ?>
	<script type="text/javascript">
		  $('.dropdown-button').dropdown({
		      inDuration: 300,
		      outDuration: 225,
		      constrain_width: false, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on hover
		      gutter: -10, // Spacing from edge
		      belowOrigin: true
		    }
		  );
	</script>
</html>
