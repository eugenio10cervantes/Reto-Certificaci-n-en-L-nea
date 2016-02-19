<div class="container">

	<?php echo $this->Form->create('User'); ?>
		
		<div class="row">
			<div class="col m4 s12 offset-m4">


				<div class="row">
					<div class="col s12">
						<?php echo $this->Flash->render('auth'); ?>
					</div>
				</div>

				<div class="row">
					<div class="col s12 input-field">
						<?php echo $this->Form->input('username',array(
							'label'=>false,
							'div'=>false
						)); ?>
						<label for="UserUsername">
							Correo electrónico
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 input-field">
						<?php echo $this->Form->input('password',array(
							'label'=>false,
							'div'=>false
						)); ?>
						<label for="UserPassword">
							Contraseña
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 center-align">
						<button class="btn" type="submit">Ingresar</button>
					</div>
				</div>

			</div>
		</div>

		<?php echo $this->Form->end(); ?>
</div>