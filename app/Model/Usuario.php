<?php

App::uses('AppModel', 'Model');

/**
 * Usuario Model
 *
 * @property Nivel $Nivel
 */
class Usuario extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombres';

    /**
     * Validation rules
     *
     * @var array
     */
            

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
     public $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'Empresa_id',
            'conditions' => '',
            //'fields' => array('filename', 'nombre', 'nit'),
            'order' => ''
        ),
       /* 'Squema' => array(
            'className' => 'Squema',
            'foreignKey' => 'squema_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )*/
    );

}
