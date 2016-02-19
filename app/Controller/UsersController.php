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
class UsersController extends AppController {

	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('add', 'logout','registro','registro_exitoso','login','confirmar');
	}

	public function login() {
	    if (!empty($this->request->data)) {
	        if ($this->Auth->login()) {
	        	//Si no se ha confirmado el correo electrónico...
	        	if($this->Session->read('Auth.User.status') == 'Sin confirmar'){
	        		//Avisarle que necesita confirmar su correo electrónico y cerrar su cesión.

	        	}else{

	        		if($this->Session->read('Auth.User.role') == 'Solicitante'){
	        			$this->redirect('/pages/usuario_inicia');
	        		}else{
	        			return $this->redirect($this->Auth->redirectUrl());
	        		}
	        	}
	        }
	        $this->Flash->error(__('Invalid username or password, try again'));
	    }

	    $this->layout = 'acceso_admin';
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout());
	}


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function registro(){

		if ($this->request->is('post')) {
			$this->User->create();

			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $randstring = '';
		    for ($i = 0; $i < 15; $i++) {
		        $randstring .= $characters[rand(0, strlen($characters))];
		    }

		    $this->request->data['User']['confirmation_key'] = $randstring;
		    $this->request->data['User']['role'] = 'Solicitante';

			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));

				$Email = new CakeEmail('smtp');
				$Email->from(array('no-responder@actstudio.mx' => 'Act'));

				$Email->to('eugenio@we-act.mx');
				
				$Email->emailFormat('html');
				$Email->template('confirmacion_correo');
				$Email->viewVars(array('datos'=>$this->request->data));

				$Email->subject('Registro en Portal de Certificación en Línea');

				$Email->send();

				return $this->redirect('/registro_exitoso/'.$this->request->data['User']['username']);
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}

	}

	public function registro_exitoso(){

	}

	public function confirmar($email = null, $confirmation_key = null){


		$usuario = $this->User->find('first',array(
			'conditions'=>array(
				'User.username'=>$email,
				'User.confirmation_key'=>$confirmation_key
			)
		));

		if(!empty($usuario)){
			$datos_a_guardar['User']['id'] = $usuario['User']['id'];
			$datos_a_guardar['User']['status'] = 'Confirmado';
			$this->User->save($datos_a_guardar);
		}

		$this->redirect('/');

	}

}
