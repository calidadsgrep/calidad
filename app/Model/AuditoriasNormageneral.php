<?php
App::uses('AppModel', 'Model');
/**
 * AuditoriasNormageneral Model
 *
 * @property Auditoria $Auditoria
 * @property Normageneral $Normageneral
 */
class AuditoriasNormageneral extends AppModel {

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
		'Normageneral' => array(
			'className' => 'Normageneral',
			'foreignKey' => 'normageneral_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
            
	);
}
