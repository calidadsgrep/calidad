<?php
App::uses('AppModel', 'Model');
/**
 * Informe Model
 *
 * @property Lista $Lista
 * @property Planauditoria $Planauditoria
 * @property Causa $Causa
 */
class Informe extends AppModel {
//public $useDbConfig = 'squema';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
            var $actsAs=array(
	    'MeioUpload'=>array('filename')
	    );


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Lista' => array(
			'className' => 'Lista',
			'foreignKey' => 'lista_id',
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Causa' => array(
			'className' => 'Causa',
			'foreignKey' => 'informe_id',
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
