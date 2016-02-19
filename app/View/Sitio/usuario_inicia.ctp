

<?php $this->set("pagina", "usuario_inicia"); ?>
<?php $this->set("datos_usuario", $this->Session->read('Auth.User')); ?>

<div class="row dash-back-gris dash-min-height">

	<div class="col m6 offset-m3 usin-border" style="background-color:white;">
		<div class="col m6 offset-m3" style="margin-bottom:50px;">
			<a href="/certificados">
				<button class="center-block btn" id="usin-boton-tramite">
					inicia tu tramite
				</button>
			</a>
			<div id="usin-texto" class="center-block">
				Registrate para iniciar tu tramite y poder
				certificarte laboralmente.
			</div>
		</div>
	</div>

</div>