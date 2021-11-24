<?php
App::uses('AppModel', 'Model');
/**
 * Subnormaindex Model
 *
 * @property Subnorma $Subnorma
 */
class Subnormaindex extends AppModel {

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
		'Subnorma' => array(
			'className' => 'Subnorma',
			'foreignKey' => 'subnorma_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
