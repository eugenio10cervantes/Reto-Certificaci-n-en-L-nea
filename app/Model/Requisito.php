<?php
App::uses('AppModel', 'Model');
/**
 * Requisito Model
 *
 * @property Perfil $Perfil
 */
class Requisito extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Perfil' => array(
			'className' => 'Perfil',
			'foreignKey' => 'perfil_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
