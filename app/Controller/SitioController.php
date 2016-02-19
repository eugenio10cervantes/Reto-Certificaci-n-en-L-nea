<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SitioController extends AppController {

	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('add', 'logout','registro','registro_exitoso','login','confirmar','registro_solicitud');
	}


//=========================================


	public function usuario_inicia()
	{
		$this->layout = 'dashboard';
	}


//=========================================


	public function usuario_micertificado()
	{
		$this->layout = 'dashboard';
	}


//=========================================


	public function usuario_notificaciones()
	{
		$this->layout = 'dashboard';
	}


//=========================================


	public function usuario_solicitud()
	{
		$this->layout = 'dashboard';
	}

	public function registro_solicitud(){

		if(!empty($this->request->data['Solicitude'])){
			$this->loadModel('Solicitude');

			$this->Solicitude->create();
			$this->Solicitude->save($this->request->data);
			$id = $this->Solicitude->getLastInsertID();

			$cambiar_numero['Solicitude']['id'] = $id;
			$cambiar_numero['Solicitude']['numero_solicitud'] = '211/02S.23/DAC/SAC/RSA/P.A-G/000'.$id.'/2016';

			$this->Solicitude->save($cambiar_numero);

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$id
				)
			));

			$Email = new CakeEmail('smtp');
			$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

			$Email->to($solicitud['Solicitante']['username']);
			$Email->cc('eugenio@we-act.mx');
			
			$Email->emailFormat('html');
			


			$Email->subject('Solicitud creada: '.$solicitud['Solicitude']['numero_solicitud']);

			$Email->send('Se ha creado su solicitud.');
		}

		$this->redirect('/usuario_solicitud');

	}

}