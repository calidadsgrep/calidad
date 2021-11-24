<?php

App::uses('AppModel', 'Model');

/**
 * Empresa Model
 *
 * @property Usuario $Usuario
 * @property Auditoria $Auditoria
 * @property Proceso $Proceso
 */
class Empresa extends AppModel {

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
            )
        ),
        'nit' => array(
            'nit' => array(
            'rule' => 'isUnique',
            'message' => 'El nit ingresado ya esta siendo usado por otra empresa.',
        )
        
    ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
      /*  'Squema' => array(
            'className' => 'Squema',
            'foreignKey' => 'empresa_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),*/
        'Usuario' => array(
            'className' => 'Usuario',
            'foreignKey' => 'empresa_id',
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
    );

}
