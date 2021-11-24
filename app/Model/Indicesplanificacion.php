<?php
App::uses('AppModel', 'Model');
/**
 * Indicesplanificacion Model
 *
 * @property Sudnormaindice $Sudnormaindice
 * @property Planauditoria $Planauditoria
 */
class Indicesplanificacion extends AppModel {

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
		),
		'Planauditoria' => array(
			'className' => 'Planauditoria',
			'foreignKey' => 'planauditoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
