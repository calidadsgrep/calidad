<?php
App::uses('AppModel', 'Model');
/**
 * Listachequeo Model
 *
 * @property Planauditoria $Planauditoria
 * @property Debe $Debe
 */
class Listachequeo extends AppModel {


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
		'Planauditoria' => array(
			'className' => 'Planauditoria',
			'foreignKey' => 'planauditoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Debe' => array(
			'className' => 'Debe',
			'foreignKey' => 'debe_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
