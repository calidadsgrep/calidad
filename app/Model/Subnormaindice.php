<?php
App::uses('AppModel', 'Model');
/**
 * Subnormaindex Model
 *
 * @property Subnorma $Subnorma
 */
class Subnormaindice extends AppModel {

/**
 * Display field
 *
 * @var string
 */     //public $useTable = 'indicesplanificacion';
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Subnorma' => array(
			'className' => 'Subnorma',
			'foreignKey' => 'subnorma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        public $hasMany = array(
		'Debe' => array(
			'className' => 'Debe',
			'foreignKey' => 'subnormaindice_id',
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
