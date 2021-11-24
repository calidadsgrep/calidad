<?php
App::uses('AppModel', 'Model');
/**
 * Actividade Model
 *
 * @property Causa $Causa
 */
class Actividade extends AppModel {

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
		'Causa' => array(
			'className' => 'Causa',
			'foreignKey' => 'causa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
