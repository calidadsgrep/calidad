<?php
App::uses('AppModel', 'Model');
/**
 * Planauditoria Model
 *
 * @property Auditoria $Auditoria
 * @property Proceso $Proceso
 * @property Indicesplanificacion $Indicesplanificacion
 * @property Informe $Informe
 * @property Lista $Lista
 */
class Planauditoria extends AppModel {

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
		'Auditoria' => array(
			'className' => 'Auditoria',
			'foreignKey' => 'auditoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proceso' => array(
			'className' => 'Proceso',
			'foreignKey' => 'proceso_id',
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
		'Indicesplanificacion' => array(
			'className' => 'Indicesplanificacion',
			'foreignKey' => 'planauditoria_id',
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
		'Informe' => array(
			'className' => 'Informe',
			'foreignKey' => 'planauditoria_id',
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
		'Lista' => array(
			'className' => 'Lista',
			'foreignKey' => 'planauditoria_id',
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
