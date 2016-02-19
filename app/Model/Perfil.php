<?php
App::uses('AppModel', 'Model');
/**
 * Perfil Model
 *
 * @property Nivel $Nivel
 * @property Requisito $Requisito
 */
class Perfil extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Nivel' => array(
			'className' => 'Nivel',
			'foreignKey' => 'nivel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Requisito' => array(
			'className' => 'Requisito',
			'foreignKey' => 'perfil_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
