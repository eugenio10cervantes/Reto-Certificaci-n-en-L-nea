

<?php $this->set("pagina", "usuario_solicitud"); ?>
<?php $this->set("datos_usuario", $this->Session->read('Auth.User')); ?>

<div class="row dash-back-gris dash-min-height">

	<div class="row">
		<div class="col m8 offset-m2 l6 offset-l3 usin-border" style="background-color:white;">

			<div id="usno-contenido">

				<span class="dash-gris-neutro">Solicitud<br>Procedimiento general</span>
				<br><br>

				<div class="row">
					<div class="col m4 offset-m4">
						<div style="display:table">
							<img src="/img/certificado-negro-gris.png" style="margin-right:20px;" width="30">
							<div class="celda" style="color:#9F9F9F; font-weight:bold;">
								Técnico Superior Universitario
							</div>
						</div>
					</div>
				</div>

				<div class="row center-align">
					<div class="col m12">
						<div class="dash-gris-fuerte" style="font-size:24px;">
							Ingeniería Mecánica Eléctrica
						</div>
					</div>
				</div>

				<br>
				<span class="dash-gris-neutro">Estatus de solicitud</span>
				<br><br>

				<div class="row center-align" style="display:table">
					<div class="col m12">
						
						<div style="display:table-cell; vertical-align:middle;">
							<div style="display:table;">
								<a class="modal-trigger" href="#dash-solicitud-modal">
									<div class="celda">
										<div class="dash-gris-fuerte solicitud-titulos">
											Registro
										</div>
									</div>
									<div class="celda">
										<img class="solicitud-imagen" src="/img/check-color.png">
									</div>
								</a>
							</div>
						</div>
						
						<div style="display:table-cell; vertical-align:middle;" class="dash-borde-left">
							<div style="display:table;">
								<div class="celda">
									<div class="dash-gris-claro solicitud-titulos">
										Admisión
									</div>
								</div>
							</div>
						</div>
						
						<div style="display:table-cell; vertical-align:middle;" class="dash-borde-left">
							<div style="display:table;">
								<div class="celda">
									<div class="dash-gris-claro solicitud-titulos">
										Resultado
									</div>
								</div>
							</div>
						</div>
						
						<div style="display:table-cell; vertical-align:middle;" class="dash-borde-left">
							<div style="display:table;">
								<div class="celda">
									<div class="dash-gris-claro solicitud-titulos">
										Mi Certificado
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<br>
				<span class="dash-gris-neutro">Requisitos y Documentos</span>
				<br><br>

				<div id="a-color">
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							Tener mínimo 21 años de edad
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							Acta de Nacimiento
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							CURP
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							Identificación Oficial
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							Certificado total de estudios del antecedente académico o revalidación correspondiente.
						</div>
					 	<div class="solicitud-editar  dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							Constancia de Honorabilidad emitida por una persona física o moral.
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
					<div class="row dash-borde-bottom">
						<div class="col m8 dash-requistos">
							CV actualizado, con fotografía y firma.
						</div>
						<div class="solicitud-editar right dash-requistos">
							<a href="">
								editar
								<img src="/img/editar-icono-gris.png" width="30" class="solicitud-editar-image">
							</a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="center-block" style="max-width:250px;">
		<a href="/certificados">
			<div class="dash-gris-claro center-block" style="display:table; margin-left:20px;">
				<i class="material-icons dash-mas">add</i>
				<div style="display:table-cell; vertical-align: middle;">Nueva certificacion</div>
			</div>
		</a>

		<div class="dash-gris-neutro" style="margin-top:30px; margin-bottom:50px;">
			Registrate para iniciar tu tramite y poder certificarte laboralmente.
		</div>
	</div>

</div>



<?php $this->Html->scriptStart(array('inline'=>false)); ?>
	$(document).ready(function(){
	    $('.modal-trigger').leanModal({
	    	opacity: .8
		});
	});
<?php $this->Html->scriptEnd(); ?>



<div id="dash-solicitud-modal" class="modal">
	<div class="modal-content">

		<div class="row center-align">
			<div class="col m12">
				<div class="dash-gris-fuerte" id="soli-modal-titulo">
					Requisitos y Documentos:
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						Tener mínimo 21 años de edad
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						Acta de nacimiento
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						CURP
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						Identificación Oficial
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						Certificado total de estudios del antecedente académico o revalidación correspondiente.
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						Constancia de Honorabilidad emitida por una persona física o moral.
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col m10 offset-m1">
				<div style="display:table">
					<img src="/img/check-simple.png" class="solicitud-imagen-modal">
					<div class="celda">
						CV actualizado, con fotografía y firma.
					</div>
				</div>
			</div>
		</div>

		<div class="row center-align">
			<div class="col m12">
				<div id="soli-modal-rojo">
					* Todos los requisitos son obligatorios
				</div>
			</div>
		</div>

    </div>
</div>