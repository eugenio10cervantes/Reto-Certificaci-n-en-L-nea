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

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php echo $this->fetch('css'); ?>
	</head>
	<body>

		<div class="row">
			<br><br>
			<div class="col s12 center-align">
				<img src="/img/logos/logo-micertificado.png" style="width:300px; max-width:100%;">
			</div>
		</div>

		<?php echo $this->fetch('content'); ?>

	</body>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<?php echo $this->fetch('script'); ?>
</html>
