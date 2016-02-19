<?php
App::uses('AppModel', 'Model');
/**
 * Nivel Model
 *
 * @property Procedimiento $Procedimiento
 * @property Perfil $Perfil
 */
class Nivel extends AppModel {

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
		'Procedimiento' => array(
			'className' => 'Procedimiento',
			'foreignKey' => 'procedimiento_id',
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
		'Perfil' => array(
			'className' => 'Perfil',
			'foreignKey' => 'nivel_id',
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
