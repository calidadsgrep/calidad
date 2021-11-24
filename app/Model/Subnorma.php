<?php
App::uses('AppModel', 'Model');
/**
 * Subnorma Model
 *
 * @property Normageneral $Normageneral
 * @property Atributossubnorma $Atributossubnorma
 * @property Subnormaindex $Subnormaindex
 */
class Subnorma extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Normageneral' => array(
			'className' => 'Normageneral',
			'foreignKey' => 'normageneral_id',
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
		'Atributossubnorma' => array(
			'className' => 'Atributossubnorma',
			'foreignKey' => 'subnorma_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Subnormaindex' => array(
			'className' => 'Subnormaindex',
			'foreignKey' => 'subnorma_id',
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
