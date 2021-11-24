<?php
App::uses('AppModel', 'Model');
/**
 * Debe Model
 *
 * @property Subnormaindice $Subnormaindice
 */
class Debe extends AppModel {

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
		'Subnormaindice' => array(
			'className' => 'Subnormaindice',
			'foreignKey' => 'subnormaindice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
