<?php
App::uses('AppModel', 'Model');
/**
 * Empresa Model
 *
 * @property Usuario $Usuario
 * @property Auditoria $Auditoria
 * @property Proceso $Proceso
 */
class Cliente extends AppModel {
      
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'razonSocial';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
		'razonSocial' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Debe de llenar el campo',
				'required' => true,
				
			),
		),
		'nit' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Debe introducir el numero de nit',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array*/
 
	public $hasMany = array(
		'Auditoria' => array(
			'className' => 'Auditoria',
			'foreignKey' => 'cliente_id',
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
		'Proceso' => array(
			'className' => 'Proceso',
			'foreignKey' => 'cliente_id',
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
