<div class="container">
	<div class="row">

		<?php echo $this->Form->create('User',array(
			'id'=>'FormaRegistro'
		)); ?>

		<div class="col m10 s12 offset-m1" style="background-color: rgb(244,244,244); border-radius: 30px;">

			<div class="row">

				<div class="col s10 offset-s1">

					<div class="row">
						<div class="col s12 center-align">
							<div style="display:table; margin-top:50px;" class="center-block">
								<img src="/img/usuario-logo-gris.png" style="width:50px; margin-right:20px;">
								<h1 style="font-size:45px; display:table-cell; vertical-align:middle; color: #a0a0a0;">Registro</h1>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<?php echo $this->Form->input('nombre',array(
								'label'=>false,
								'div'=>false,
								'required'
							)); ?>
							<label for="UserNombre" class="color-gris-oscuro font-bold">
								Nombre(s)
								<label id="UserNombre-error" class="error" for="UserNombre" style="display:none;"></label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('primer_apellido',array(
								'label'=>false,
								'div'=>false,
								'required'
							)); ?>
							<label for="UserPrimerApellido" class="color-gris-oscuro font-bold">
								Primer Apellido
								<label id="UserPrimerApellido-error" class="error" for="UserPrimerApellido" style="display:none;"></label>
							</label>
						</div>
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('segundo_apellido',array(
								'label'=>false,
								'div'=>false,
								'required'
							)); ?>
							<label for="UserSegundoApellido" class="color-gris-oscuro font-bold">
								Segundo Apellido
								<label id="UserSegundoApellido-error" class="error" for="UserSegundoApellido" style="display:none;"></label>
							</label>
						</div>
					</div>

					<div class="row" style="margin:0px;">
						<div class="col m6 s12" style="padding-left:0px;">
							<span class="color-gris-oscuro font-bold">
								Fecha de nacimiento:
								<label id="UserFechaNacimiento-error" class="error" for="UserFechaNacimiento" style="display:none;"></label>
							</span>
						</div>

						<div class="col m6 s12">
							<span class="color-gris-oscuro font-bold">
								Género:
							</span>
							<label id="groupGenero-error" class="error" for="groupGenero" style="display:none;"></label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m6 s12">
							
							<?php echo $this->Form->input('fecha_nacimiento',array(
								'class'=>'datepicker',
								'label'=>false,
								'placeholder'=>'Selecciona para abrir el calendario',
								'type'=>'text',
								'required'
							)); ?>

							<?php $this->Html->scriptStart(array('inline'=>false)); ?>

								$('.datepicker').pickadate({
									monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
									weekdaysShort: ['D', 'L', 'M', 'X', 'J', 'V', 'S'],
									clear: 'borrar',
									formatSubmit: 'yyyy-mm-dd',
									min: new Date(1900,1,1),
									max: true,
									selectMonths: true,
									selectYears: 100,
									today: 'hoy',
									close: 'cerrar'
								});

							<?php $this->Html->scriptEnd(); ?>
						</div>

						<div class="input-field col m6 s12" required>
							<input name="groupGenero" type="radio" id="test1" value="Hombre"/>
      						<label for="test1" class="color-gris-oscuro font-bold" style="margin-right:30px;">Hombre</label>

      						<input name="groupGenero" type="radio" id="test2" value="Mujer"/>
      						<label for="test2" class="color-gris-oscuro font-bold">Mujer</label>
						</div>
					</div>


					<label class="color-gris-oscuro font-bold">
						<label id="nacionalidad-error" style="margin-left:0px;display:none;">*Requerido</label>
					</label>
					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('nacionalidad',array(
								'type'=>'select',
								'options'=>array(
									'México'=>'México',
									'Afganistán'=>'Afganistán',
									'Africa del Sur'=>'Africa del Sur',
									'Albania'=>'Albania',
									'Alemania'=>'Alemania',
									'Andorra'=>'Andorra',
									'Angola'=>'Angola',
									'Antigua y Barbuda'=>'Antigua y Barbuda',
									'Antillas Holandesas'=>'Antillas Holandesas',
									'Arabia Saudita'=>'Arabia Saudita',
									'Argelia'=>'Argelia',
									'Argentina'=>'Argentina',
									'Armenia'=>'Armenia',
									'Aruba'=>'Aruba',
									'Australia'=>'Australia',
									'Austria'=>'Austria',
									'Azerbaijan'=>'Azerbaijan',
									'Bahamas'=>'Bahamas',
									'Bahrain'=>'Bahrain',
									'Bangladesh'=>'Bangladesh',
									'Barbados'=>'Barbados',
									'Belarusia'=>'Belarusia',
									'Bélgica'=>'Bélgica',
									'Bélice'=>'Bélice',
									'Benin'=>'Benin',
									'Bermudas'=>'Bermudas',
									'Bolivia'=>'Bolivia',
									'Bosnia'=>'Bosnia',
									'Botswana'=>'Botswana',
									'Brasil'=>'Brasil',
									'Brunei Darussulam'=>'Brunei Darussulam',
									'Bulgaria'=>'Bulgaria',
									'Burkina Faso'=>'Burkina Faso',
									'Burundi'=>'Burundi',
									'Butan'=>'Butan',
									'Camboya'=>'Camboya',
									'Camerun'=>'Camerun',
									'Canada'=>'Canada',
									'Cape Verde'=>'Cape Verde',
									'Chad'=>'Chad',
									'Chile'=>'Chile',
									'China'=>'China',
									'Chipre'=>'Chipre',
									'Colombia'=>'Colombia',
									'Comoros'=>'Comoros',
									'Congo'=>'Congo',
									'Corea del Norte'=>'Corea del Norte',
									'Corea del Sur'=>'Corea del Sur',
									'Costa de Marfíl'=>'Costa de Marfíl',
									'Costa Rica'=>'Costa Rica',
									'Croasia'=>'Croasia',
									'Cuba'=>'Cuba',
									'Dinamarca'=>'Dinamarca',
									'Djibouti'=>'Djibouti',
									'Dominica'=>'Dominica',
									'Ecuador'=>'Ecuador',
									'Egipto'=>'Egipto',
									'El Salvador'=>'El Salvador',
									'Emiratos Arabes Unidos'=>'Emiratos Arabes Unidos',
									'Eritrea'=>'Eritrea',
									'Eslovenia'=>'Eslovenia',
									'España'=>'España',
									'Estados Unidos'=>'Estados Unidos',
									'Estonia'=>'Estonia',
									'Etiopia'=>'Etiopia',
									'Fiji'=>'Fiji',
									'Filipinas'=>'Filipinas',
									'Finlandia'=>'Finlandia',
									'Francia'=>'Francia',
									'Gabon'=>'Gabon',
									'Gambia'=>'Gambia',
									'Georgia'=>'Georgia',
									'Ghana'=>'Ghana',
									'Granada'=>'Granada',
									'Grecia'=>'Grecia',
									'Groenlandia'=>'Groenlandia',
									'Guadalupe'=>'Guadalupe',
									'Guam'=>'Guam',
									'Guatemala'=>'Guatemala',
									'Guayana Francesa'=>'Guayana Francesa',
									'Guerney'=>'Guerney',
									'Guinea'=>'Guinea',
									'Guinea-Bissau'=>'Guinea-Bissau',
									'Guinea Equatorial'=>'Guinea Equatorial',
									'Guyana'=>'Guyana',
									'Haiti'=>'Haiti',
									'Holanda'=>'Holanda',
									'Honduras'=>'Honduras',
									'Hong Kong'=>'Hong Kong',
									'Hungria'=>'Hungria',
									'India'=>'India',
									'Indonesia'=>'Indonesia',
									'Irak'=>'Irak',
									'Iran'=>'Iran',
									'Irlanda'=>'Irlanda',
									'Islandia'=>'Islandia',
									'Islas Caiman'=>'Islas Caiman',
									'Islas Faroe'=>'Islas Faroe',
									'Islas Malvinas'=>'Islas Malvinas',
									'Islas Marshall'=>'Islas Marshall',
									'Islas Solomon'=>'Islas Solomon',
									'Islas Virgenes Britanicas'=>'Islas Virgenes Britanicas',
									'Islas Virgenes (U.S.)'=>'Islas Virgenes (U.S.)',
									'Israel'=>'Israel',
									'Italia'=>'Italia',
									'Jamaica'=>'Jamaica',
									'Japon'=>'Japon',
									'Jersey'=>'Jersey',
									'Jordania'=>'Jordania',
									'Kazakhstan'=>'Kazakhstan',
									'Kenia'=>'Kenia',
									'Kiribati'=>'Kiribati',
									'Kuwait'=>'Kuwait',
									'Kyrgyzstan'=>'Kyrgyzstan',
									'Laos'=>'Laos',
									'Latvia'=>'Latvia',
									'Lesotho'=>'Lesotho',
									'Libano'=>'Libano',
									'Liberia'=>'Liberia',
									'Libia'=>'Libia',
									'Liechtenstein'=>'Liechtenstein',
									'Lituania'=>'Lituania',
									'Luxemburgo'=>'Luxemburgo',
									'Macao'=>'Macao',
									'Macedonia'=>'Macedonia',
									'Madagascar'=>'Madagascar',
									'Malasia'=>'Malasia',
									'Malawi'=>'Malawi',
									'Maldivas'=>'Maldivas',
									'Mali'=>'Mali',
									'Malta'=>'Malta',
									'Marruecos'=>'Marruecos',
									'Martinica'=>'Martinica',
									'Mauricio'=>'Mauricio',
									'Mauritania'=>'Mauritania',
									'Micronesia'=>'Micronesia',
									'Moldova'=>'Moldova',
									'Monaco'=>'Monaco',
									'Mongolia'=>'Mongolia',
									'Mozambique'=>'Mozambique',
									'Myanmar (Burma)'=>'Myanmar (Burma)',
									'Namibia'=>'Namibia',
									'Nepal'=>'Nepal',
									'Nicaragua'=>'Nicaragua',
									'Niger'=>'Niger',
									'Nigeria'=>'Nigeria',
									'Noruega'=>'Noruega',
									'Nueva Caledonia'=>'Nueva Caledonia',
									'Nueva Zealandia'=>'Nueva Zealandia',
									'Oman'=>'Oman',
									'Pakistan'=>'Pakistan',
									'Palestina'=>'Palestina',
									'Panama'=>'Panama',
									'Papua Nueva Guinea'=>'Papua Nueva Guinea',
									'Paraguay'=>'Paraguay',
									'Peru'=>'Peru',
									'Polinesia Francesa'=>'Polinesia Francesa',
									'Polonia'=>'Polonia',
									'Portugal'=>'Portugal',
									'Puerto Rico'=>'Puerto Rico',
									'Qatar'=>'Qatar',
									'Reino Unido'=>'Reino Unido',
									'Republica Centroafricana'=>'Republica Centroafricana',
									'Republica Checa'=>'Republica Checa',
									'Republica Democratica del Congo'=>'Republica Democratica del Congo',
									'Republica Dominicana'=>'Republica Dominicana',
									'Republica Eslovaca'=>'Republica Eslovaca',
									'Reunion'=>'Reunion',
									'Ruanda'=>'Ruanda',
									'Rumania'=>'Rumania',
									'Rusia'=>'Rusia',
									'Sahara'=>'Sahara',
									'Samoa'=>'Samoa',
									'San Cristobal-Nevis (St. Kitts)'=>'San Cristobal-Nevis (St. Kitts)',
									'San Marino'=>'San Marino',
									'San Vincente y las Granadinas'=>'San Vincente y las Granadinas',
									'Santa Helena'=>'Santa Helena',
									'Santa Lucia'=>'Santa Lucia',
									'Santa Sede (Vaticano)'=>'Santa Sede (Vaticano)',
									'Sao Tome & Principe'=>'Sao Tome & Principe',
									'Senegal'=>'Senegal',
									'Seychelles'=>'Seychelles',
									'Sierra Leona'=>'Sierra Leona',
									'Singapur'=>'Singapur',
									'Siria'=>'Siria',
									'Somalia'=>'Somalia',
									'Sri Lanka (Ceilan)'=>'Sri Lanka (Ceilan)',
									'Sudan'=>'Sudan',
									'Suecia'=>'Suecia',
									'Suiza'=>'Suiza',
									'Sur Africa'=>'Sur Africa',
									'Surinam'=>'Surinam',
									'Swaziland'=>'Swaziland',
									'Tailandia'=>'Tailandia',
									'Taiwan'=>'Taiwan',
									'Tajikistan'=>'Tajikistan',
									'Tanzania'=>'Tanzania',
									'Timor Oriental'=>'Timor Oriental',
									'Togo'=>'Togo',
									'Tokelau'=>'Tokelau',
									'Tonga'=>'Tonga',
									'Trinidad & Tobago'=>'Trinidad & Tobago',
									'Tunisia'=>'Tunisia',
									'Turkmenistan'=>'Turkmenistan',
									'Turquia'=>'Turquia',
									'Ucrania'=>'Ucrania',
									'Uganda'=>'Uganda',
									'Union Europea'=>'Union Europea',
									'Uruguay'=>'Uruguay',
									'Uzbekistan'=>'Uzbekistan',
									'Vanuatu'=>'Vanuatu',
									'Venezuela'=>'Venezuela',
									'Vietnam'=>'Vietnam',
									'Yemen'=>'Yemen',
									'Yugoslavia'=>'Yugoslavia',
									'Zambia'=>'Zambia',
									'Zimbabwe'=>'Zimbabwe'
								),
								'empty'=>'Nacionalidad',
								'label'=>false,
								'div'=>false
							)); ?>
						</div>

						<div class="input-field col m6 s12 right-align">

							<?php echo $this->Form->input('curp',array(
								'div'=>false,
								'label'=>false
							)); ?>

							<label for="nombre" class="color-gris-oscuro font-bold">CURP</label>
							<a href="#">Consulta tu CURP aquí</a>
						</div>
					</div>


					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('domicilio',array(
								'div'=>false,
								'label'=>false,
								'required'
							)); ?>
							<label for="UserDomicilio" class="color-gris-oscuro font-bold">
								Domicilio
								<label id="UserDomicilio-error" class="error" for="UserDomicilio" style="display:none;"></label>
							</label>
						</div>

						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('colonia',array(
								'div'=>false,
								'label'=>false,
								'required'
							)); ?>
							<label for="UserColonia" class="color-gris-oscuro font-bold">
								Colonia
								<label id="UserColonia-error" class="error" for="UserColonia" style="display:none;"></label>
							</label>
						</div>
					</div>

					<label class="color-gris-oscuro font-bold">
						<label id="EntidadFederativa-error" style="margin-left:0px;display:none;">*Requerido</label>
					</label>
					<div class="row">
						<div class="input-field col m6 s12">
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
								'div'=>false
							)); ?>
						</div>

						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('delegacion',array(
								'div'=>false,
								'label'=>false,
								'required'
							)); ?>
							<label for="UserDelegacion" class="color-gris-oscuro font-bold">
								Delegación/Municipio
								<label id="UserDelegacion-error" class="error" for="UserDelegacion" style="display:none;"></label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('localidad',array(
								'div'=>false,
								'label'=>false,
								'required'
							)); ?>
							<label for="UserLocalidad" class="color-gris-oscuro font-bold">
								Localidad
								<label id="UserLocalidad-error" class="error" for="UserLocalidad" style="display:none;"></label>
							</label>
						</div>

						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('codigo_postal',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserCodigoPostal" class="color-gris-oscuro font-bold">
								Código Postal
								<label id="UserCodigoPostal-error" class="error" for="UserCodigoPostal" style="display:none;"></label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('telefono',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserTelefono" class="color-gris-oscuro font-bold">
								Teléfono
								<label id="UserTelefono-error" class="error" for="UserTelefono" style="display:none;"></label>
							</label>
						</div>

						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('telefono_movil',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserTelefonoMovil" class="color-gris-oscuro font-bold">
								Teléfono Móvil
								<label id="UserTelefonoMovil-error" class="error" for="UserTelefonoMovil" style="display:none;"></label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s8">
							<?php echo $this->Form->input('username',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserUsername" class="color-gris-oscuro font-bold">
								Correo electrónico
								<label id="UserUsername-error" class="error" for="UserUsername" style="display:none;"></label>
							</label>
						</div>
					</div>


					<div class="row">
						<div class="input-field col s8">
							<?php echo $this->Form->input('confirmar_correo_electronico',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserConfirmarCorreoElectronico" class="color-gris-oscuro font-bold">
								Confirmación correo electrónico
								<label id="confirmaCorreo-error" style="display:none;">*Mismo correo.</label>
							</label>

						</div>
					</div>


					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('password',array(
								'div'=>false,
								'label'=>false
							)); ?>
							<label for="UserPassword" class="color-gris-oscuro font-bold">
								Password
								<label id="UserPassword-error" class="error" for="UserPassword" style="display:none;"></label>
							</label>
						</div>

						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('confirmar_password',array(
								'div'=>false,
								'label'=>false,
								'type'=>'password'
							)); ?>
							<label for="UserConfirmarPassword" class="color-gris-oscuro font-bold">
								Confirmación password
								<label id="confirmaPassword-error" style="display:none;">*Misma password.</label>
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col s10">
							<h1 class="color-gris-oscuro">¿Por qué medio se enteró de este programa de acreditación?</h1>
							<label id="groupAbajo-error" class="error" for="groupAbajo" style="display:none;"></label>
						</div>
					</div>

					<div class="row">
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="_test1" />
      						<label for="_test1" class="color-gris-oscuro font-bold" value="Internet">Internet</label>
						</div>
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="_test2" />
      						<label for="_test2" class="color-gris-oscuro font-bold" value="Centro de trabajo">Centro de trabajo</label>
						</div>
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="test3" />
      						<label for="test3" class="color-gris-oscuro font-bold" value="Institución Educativa">Institución Educativa</label>
						</div>
					</div>

					<div class="row">
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="test4" />
      						<label for="test4" class="color-gris-oscuro font-bold" value="Cartel o Folleto">Cartel o Folleto</label>
						</div>
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="test5" />
      						<label for="test5" class="color-gris-oscuro font-bold" value="Recomendación">Recomendación</label>
						</div>
						<div class="col s4">
							<input name="groupAbajo" type="radio" id="test6" />
      						<label for="test6" class="color-gris-oscuro font-bold" value="Otro">Otro</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m6 s12">
							<?php echo $this->Form->input('otro',array(
								'div'=>false,
								'label'=>false
							)); ?>

							<label for="otro" class="color-gris-oscuro font-bold">Otro, específique</label>
						</div>
					</div>	

					<div class="row" style="background-color: rgb(201,201,201); padding-top: 25px; padding-bottom: 25px;">
						<div class="barra-scroll" style="max-height: 200px; overflow: auto; margin-right:10px;">
						
							<div class="col s10 offset-s1">

								<h2 class="color-gris-oscuro" style="margin:0px;">Aviso de conformidad</h2>

								<p class="color-gris-oscuro">
									1.	Conozco y acepto el contenido de las Normas Generales para la Acreditación y Certificación de conocimientos terminales correspondientes a estudios del tipo superior y aquellos del tipo medio superior referidos a la educación profesional que no requiere bachillerato o sus equivalentes, adquiridos en forma autodidacta o a través de la experiencia laboral, emitidas por la Dirección General de Acreditación, Incorporación y Revalidación de la Secretaría de Educación Pública, mediante oficio circular No. DGAIR/005/2011, de fecha 16 de febrero de 2011; las obligaciones y consecuencias que asumo de sujetarme a los procedimientos previstos en dichas normas, y manifiesto bajo protesta de decir verdad que me sujeto a las mismas y a las evaluaciones derivadas de la misma de manera voluntaria. De igual forma manifiesto que la información que se proporciona en la solicitud de registro es verídica.
								</p>

								<p class="color-gris-oscuro">
									2.	Doy mi consentimiento a la Dirección General de Acreditación, Incorporación y Revalidación de la Secretaría de Educación Pública, para que en términos del artículo 21 de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental, haga uso de mis datos personales para el desahogo del presente procedimiento.
								</p>

								<p class="color-gris-oscuro">
									3.	Los datos personales y académicos serán protegidos en términos de lo dispuesto por la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental y la Ley Federal de Protección de Datos en Posesión de Particulares, lo anterior, sin perjuicio de que estoy enterado de que en términos del artículo 22, fracción III de la citada Ley, no es necesario mi consentimiento respecto de información que se transmita entre sujetos obligados o entre dependencias y entidades, cuando los datos respectivos se utilicen para el ejercicio de facultades propias de los mismos.
								</p>

								<p class="color-gris-oscuro">
									4.	De conformidad con lo establecido en el artículo 35, fracción II de la Ley Federa de Procedimiento Administrativo, acepto expresamente que toda comunicación y o notificación relacionada con este trámite, se realice a través de correo electrónico, por lo que asumo la responsabilidad de verificar periódicamente los mensajes recibidos en el mismo y notificar en su caso el cambio de correo electrónico.
								</p>

							</div>

						</div>
					</div>

					<div class="center-align"><label id="aviso-error" class="error" for="data[User][aviso]" style="display:none;"></label></div>
					<div class="row">
						<div class="col s12 center-align">
							<?php echo $this->Form->input('aviso',array(
								'type'=>'checkbox',
								'label'=>false,
								'div'=>false
							)); ?>

							<label for="UserAviso" class="color-gris-oscuro font-bold">Acepto el aviso de conformidad</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 center-align">
							<?php echo $this->Form->submit('Registrar',array(
								'class'=>'btn btn-negro',
								'id'=>'submit-forma'
							)); ?>
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

	$('#submit-forma').click(function(){
		
		var bandera = true;

		if(!$("#FormaRegistro").valid()){
			bandera = false;
		}

		if($("#UserEntidadFederativa").val() == ""){
			bandera = false
			$('#EntidadFederativa-error').css('display','');
		}else{
			$('#EntidadFederativa-error').css('display','none');
		}

		if($("#UserNacionalidad").val() == ""){
			bandera = false
			$('#nacionalidad-error').css('display','');
		}else{
			$('#nacionalidad-error').css('display','none');
		}

		if($("#UserConfirmarCorreoElectronico").val() != $("#UserUsername").val() || $("#UserConfirmarCorreoElectronico").val() == "") {
			bandera = false
			$('#confirmaCorreo-error').css('display','');
		}else{
			$('#confirmaCorreo-error').css('display','none');
		}

		if($("#UserConfirmarPassword").val() != $("#UserPassword").val() || $("#UserConfirmarPassword").val() == "") {
			bandera = false
			$('#confirmaPassword-error').css('display','');
		}else{
			$('#confirmaPassword-error').css('display','none');
		}

		return bandera;
	});

	$('#UserEntidadFederativa').change(function()
	{
		if($("#UserEntidadFederativa").val() == ""){
			$('#EntidadFederativa-error').css('display','');
		}else{
			$('#EntidadFederativa-error').css('display','none');
		}
	});

	$('#UserNacionalidad').change(function()
	{
		if($("#UserNacionalidad").val() == ""){
			$('#nacionalidad-error').css('display','');
		}else{
			$('#nacionalidad-error').css('display','none');
		}
	});

	$('#UserConfirmarCorreoElectronico').change(function()
	{	
		if($("#UserConfirmarCorreoElectronico").val() != $("#UserUsername").val()){
			$('#confirmaCorreo-error').css('display','');
		}else{
			$('#confirmaCorreo-error').css('display','none');
		}
	});

	$('#UserConfirmarPassword').change(function()
	{	
		if($("#UserConfirmarPassword").val() != $("#UserPassword").val()){
			$('#confirmaPassword-error').css('display','');
		}else{
			$('#confirmaPassword-error').css('display','none');
		}
	});

	$( "#FormaRegistro" ).validate({

	  rules: {

	    "data[User][codigo_postal]":
	    {
	      required: true,
	      number: true
	    },
	    "data[User][telefono]":
	    {
	    	required: true,
	      	number: true
		},
	    "data[User][telefono_movil]":
	    {
	    	required: true,
	      	number: true
		},
		"data[User][username]":
	    {
	    	required: true,
	      	email: true
		},
		"data[User][password]":
	    {
	    	required: true
		},
		"groupGenero":
		{
			required: true
		},
		"groupAbajo":
		{
			required: true
		},
		"data[User][aviso]":
		{
			required: true
		}

	  }

	});

<?php $this->Html->scriptEnd(); ?>