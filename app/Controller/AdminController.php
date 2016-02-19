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
class AdminController extends AppController {

	public $components = array('Paginator','Session');

	public function beforeFilter(){
		parent::beforeFilter();
	    $this->Auth->allow('catalogos');
	}

	public function index(){
		$this->layout = 'admin';
	}

	public function procedimientos(){
		$this->loadModel('Procedimiento');

		$procedimientos = $this->Procedimiento->find('all');

		$this->set('procedimientos',$procedimientos);

		$this->layout = 'admin';
	}

	public function agregar_procedimiento(){		
		$this->layout = 'admin';
	}

	public function procedimiento($procedimiento_id = null){
		$this->loadModel('Procedimiento');

		$procedimiento = $this->Procedimiento->find('first',array(
			'conditions'=>array(
				'Procedimiento.id'=>$procedimiento_id
			),
			'recursive'=>1
		));

		$this->set('procedimiento',$procedimiento);

		$this->layout = 'admin';
	}

	public function nivel($nivel_id = null){
		$this->loadModel('Nivel');

		$nivel = $this->Nivel->find('first',array(
			'conditions'=>array(
				'Nivel.id'=>$nivel_id
			),
			'recursive'=>1
		));

		$this->set('nivel',$nivel);

		$this->layout = 'admin';
	}

	public function perfil($perfil_id = null){
		$this->loadModel('Perfil');

		$perfil = $this->Perfil->find('first',array(
			'conditions'=>array(
				'Perfil.id'=>$perfil_id
			),
			'recursive'=>2
		));

		$this->set('perfil',$perfil);

		$this->layout = 'admin';
	}

	public function solicitudes(){

		$this->loadModel('Solicitude');

		if($this->Session->read('Auth.User.role') == 'Instancia Evaluadora' || $this->Session->read('Auth.User.role') == 'Colegio de Profesionistas'){

			$this->Paginator->settings = array(
				'Solicitude'=>array(
					'limit' => 5,
					'conditions'=>array(
						'Solicitude.evaluador_id'=>$this->Session->read('Auth.User.id'),
						'Solicitude.estatus'=>'Admision'
					)
				)
			);

			$solicitudes = $this->Paginator->paginate('Solicitude');

			$this->set('solicitudes',$solicitudes);

			$this->layout = 'admin';

			$this->render('Evaluadores/solicitudes');

		}else{

			if ($this->request->is('post')) {

			}

			$this->Paginator->settings = array(
				'Solicitude'=>array(
					'limit' => 5,
					'conditions'=>array(

					)
				)
			);

			$solicitudes = $this->Paginator->paginate('Solicitude');

			$this->set('solicitudes',$solicitudes);

		}

		$this->layout = 'admin';
	}

	public function solicitud($solicitud_id = null){

		$this->loadModel('Solicitude');
		$this->loadModel('Procedimiento');
		$this->loadModel('User');

		$solicitud = $this->Solicitude->find('first',array(
			'conditions'=>array(
				'Solicitude.id'=>$solicitud_id
			),
			'recursive'=>2
		));
		$procedimientos = $this->Procedimiento->find('list');

		$this->set('solicitud',$solicitud);
		$this->set('procedimientos',$procedimientos);
	
		if($this->Session->read('Auth.User.role') == 'Instancia Evaluadora' || $this->Session->read('Auth.User.role') == 'Colegio de Profesionistas'){

			if($solicitud['Evaluador']['id'] != $this->Session->read('Auth.User.id')){
				$this->redirect('/admin/solicitudes');
			}else{
				$this->layout = 'admin';
				$this->render('Evaluadores/solicitud');
			}

		}

		$instancias = $this->User->find('all',array(
			'conditions'=>array(
				'User.role'=>'Instancia evaluadora'
			)
		));

		$lista_instancias = array();

		foreach ($instancias as $instancia) {
			
			$lista_instancias[$instancia['User']['id']] = $instancia['User']['nombre'].' '.$instancia['User']['primer_apellido'];

		}

		$instancias = $lista_instancias;

		$colegios = $this->User->find('all',array(
			'conditions'=>array(
				'User.role'=>'Colegio de Profesionistas'
			)
		));

		$lista_colegios = array();

		foreach ($colegios as $colegio) {
			
			$lista_colegios[$colegio['User']['id']] = $colegio['User']['nombre'].' '.$colegio['User']['primer_apellido'];

		}

		$colegios = $lista_colegios;
		
		$this->set('instancias',$instancias);
		$this->set('colegios',$colegios);

		$this->layout = 'admin';

	}

	public function desechamiento(){
		if(!empty($this->request->data['Desechamiento'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Desechamiento']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){
				

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Registrado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Desechamiento']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Desechamiento';
					$this->Solicitude->save($datos_a_guardar);


					//Enviar notificación con documentos al usuario.

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_desechamiento');
					$Email->attachments(WWW_ROOT.'/files/desechamiento.pdf');

					$Email->subject('Solicitud desechada: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

				}				
			}
		}
		$this->redirect('/admin/solicitudes');
	}

	public function incompetencia(){
		if(!empty($this->request->data['Incompetencia'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Incompetencia']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){
				

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Registrado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Incompetencia']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Incompetencia';
					$this->Solicitude->save($datos_a_guardar);


					//Enviar notificación con documentos al usuario.

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_incompetencia');
					$Email->attachments(WWW_ROOT.'/files/incompetencia.pdf');

					$Email->subject('Solicitud incompetente: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

				}				
			}
		}
		$this->redirect('/admin/solicitudes');
	}

	public function prevencion(){
		if(!empty($this->request->data['Prevencion'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Prevencion']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){
				

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Registrado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Prevencion']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Prevencion';
					$this->Solicitude->save($datos_a_guardar);


					//Enviar notificación con documentos al usuario.

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_prevencion');
					$Email->attachments(WWW_ROOT.'/files/prevencion.pdf');

					$Email->subject('Solicitud en prevención: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

				}				
			}
		}
		$this->redirect('/admin/solicitudes');
	}

	public function instancia(){
		if(!empty($this->request->data['Instancia'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Instancia']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){
				

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Registrado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Instancia']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Admisión';
					$datos_a_guardar['Solicitude']['evaluador_id'] = $this->request->data['Instancia']['instancia_id'];

					$this->Solicitude->save($datos_a_guardar);


					//Enviar notificación con documentos al usuario.

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_admision');
					$Email->attachments(WWW_ROOT.'/files/admision.pdf');

					$Email->subject('Solicitud admitida: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Evaluador']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_instancia');

					$Email->subject('Nueva solicitud asignada');
					$Email->send();

				}				
			}
		}
		$this->redirect('/admin/solicitudes');
	}

	public function colegio(){
		if(!empty($this->request->data['Colegio'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Colegio']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){
				

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Registrado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Colegio']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Admisión';
					$datos_a_guardar['Solicitude']['evaluador_id'] = $this->request->data['Colegio']['colegio_id'];

					$this->Solicitude->save($datos_a_guardar);


					//Enviar notificación con documentos al usuario.

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');
					$Email->template('notificacion_admision_colegio');
					$Email->attachments(WWW_ROOT.'/files/admision.pdf');

					$Email->subject('Solicitud admitida: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Evaluador']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->attachments(WWW_ROOT.'/files/oficio.pdf');

					$Email->emailFormat('html');
					$Email->template('notificacion_colegio');

					$Email->subject('Nueva solicitud asignada');
					$Email->send();

				}				
			}
		}
		$this->redirect('/admin/solicitudes');
	}

	public function resolucion_administrativa(){
		if(!empty($this->request->data['Resolucion'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Resolucion']['solicitud_id']
				),
				'recursive'=>2
			));

			//Si la solicitud está asignada al administrador o el rol es superadministrador...
			if($solicitud['Solicitude']['administrador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){

				//Solamente si la solicitud se encuentra en estatus de "Registrado" se cambiará el estatus a "Desechamiento"
				if($solicitud['Solicitude']['estatus'] == 'Evaluado'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Resolucion']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Finalizado';
					$datos_a_guardar['Solicitude']['resolucion_final'] = $this->request->data['Resolucion']['resolucion'];

					$this->Solicitude->save($datos_a_guardar);

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Solicitante']['username']);
					$Email->cc('eugenio@we-act.mx');
					
					$Email->emailFormat('html');

					if($this->request->data['Resolucion']['resolucion'] == 'Aprobado'){
						$Email->template('notificacion_resolucion_aprobatoria');
					}else{
						$Email->template('notificacion_resolucion_no_aprobatoria');
					}

					$Email->attachments(WWW_ROOT.'/files/resolucion.pdf');

					$Email->subject('Resolución a su solicitud: '.$solicitud['Solicitude']['numero_solicitud']);

					$Email->send();

					$this->redirect('/admin');

				}

			}
		}

		$this->redirect('/admin/solicitudes');
	}

	public function evaluacion(){
		if(!empty($this->request->data['Evaluacion'])){

			$this->loadModel('Solicitude');

			$solicitud = $this->Solicitude->find('first',array(
				'conditions'=>array(
					'Solicitude.id'=>$this->request->data['Evaluacion']['solicitud_id']
				),
				'recursive'=>2
			));

			if($solicitud['Solicitude']['evaluador_id'] == $this->Session->read('Auth.User.id') || $this->Session->read('Auth.User.role') == 'Superadministrador'){

				if($solicitud['Solicitude']['estatus'] == 'Admisión'){

					$datos_a_guardar['Solicitude']['id'] = $this->request->data['Evaluacion']['solicitud_id'];
					$datos_a_guardar['Solicitude']['estatus'] = 'Evaluado';
					$datos_a_guardar['Solicitude']['evaluacion_1'] = $this->request->data['Evaluacion']['evaluacion_1'];
					$datos_a_guardar['Solicitude']['evaluacion_2'] = $this->request->data['Evaluacion']['evaluacion_2'];
					$datos_a_guardar['Solicitude']['evaluacion_3'] = $this->request->data['Evaluacion']['evaluacion_3'];

					$this->Solicitude->save($datos_a_guardar);

					$Email = new CakeEmail('smtp');
					$Email->from(array('no-responder@actstudio.mx' => 'Portal de Certificación En Línea'));

					$Email->to($solicitud['Administrador']['username']);
					$Email->cc('eugenio@we-act.mx');

					$Email->emailFormat('html');

					$Email->subject('Se ha evaluado la solicitud '.$solicitud['Solicitude']['numero_solicitud']);
					$Email->send('La solicitud número '.$solicitud['Solicitude']['numero_solicitud'].' ya ha sido evaluada.');

				}

			}
		}

		$this->redirect('/admin/solicitud');
	}

}