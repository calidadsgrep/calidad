<?php
App::uses('AppModel', 'Model');
/**
 * Normageneral Model
 *
 * @property Subnorma $Subnorma
 * @property Auditoria $Auditoria
 */
class Normageneral extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Subnorma' => array(
			'className' => 'Subnorma',
			'foreignKey' => 'normageneral_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 
	public $hasAndBelongsToMany = array(
		'Auditoria' => array(
			'className' => 'Auditoria',
			'joinTable' => 'auditorias_normagenerals',
			'foreignKey' => 'normageneral_id',
			'associationForeignKey' => 'auditoria_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
*/
}
