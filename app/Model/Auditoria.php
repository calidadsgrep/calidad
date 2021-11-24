<?php
App::uses('AppModel', 'Model');
/**
 * Auditoria Model
 *
 * @property Empresa $Empresa
 * @property Normageneral $Normageneral
 */
class Auditoria extends AppModel {
 
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
		'Empresa' => array(
			'className' => 'Empresa',
			'foreignKey' => 'empresa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
               'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);



public $hasMany = array(
        'AuditoriasNormageneral' => array(
            'className' => 'AuditoriasNormageneral',
            'foreignKey' => 'auditoria_id',
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
