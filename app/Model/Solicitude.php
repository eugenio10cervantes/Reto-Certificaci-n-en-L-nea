<?php
App::uses('AppModel', 'Model');
/**
 * Solicitude Model
 *
 * @property Solicitante $Solicitante
 * @property Evaluador $Evaluador
 */
class Solicitude extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'numero_solicitud';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Solicitante' => array(
			'className' => 'User',
			'foreignKey' => 'solicitante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Evaluador' => array(
			'className' => 'User',
			'foreignKey' => 'evaluador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Administrador' => array(
			'className' => 'User',
			'foreignKey' => 'administrador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Perfil' => array(
			'className' => 'Perfil',
			'foreignKey' => 'perfil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
