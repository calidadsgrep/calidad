<?php
App::uses('AppModel', 'Model');
/**
 * Auditor Model
 *
 * @property Empresa $Empresa
 */
class Auditor extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombres';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'usuario_id',
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
