<?php

App::uses('AppModel', 'Model');

/**
 * Squema Model
 *
 */
class Squema extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nombre_bd';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array();

    //The Associations below have been created with all possible keys, those that are not needed can be removed
    
    public $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'empresa_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
    public $hasMany = array(
        'Usuario' => array(
            'className' => 'Usuario',
            'foreignKey' => 'squema_id',
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