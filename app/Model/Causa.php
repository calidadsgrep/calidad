<?php
App::uses('AppModel', 'Model');
/**
 * Causa Model
 *
 * @property Informe $Informe
 * @property Actividade $Actividade
 */
class Causa extends AppModel {

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
		'Informe' => array(
			'className' => 'Informe',
			'foreignKey' => 'informe_id',
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
		'Actividade' => array(
			'className' => 'Actividade',
			'foreignKey' => 'causa_id',
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
