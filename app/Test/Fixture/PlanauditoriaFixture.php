<?php
/**
 * Planauditoria Fixture
 */
class PlanauditoriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'proceso' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'auditoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'proceso_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechaAuditoria' => array('type' => 'date', 'null' => false, 'default' => null),
		'horaInicio' => array('type' => 'time', 'null' => false, 'default' => null),
		'horaFin' => array('type' => 'time', 'null' => false, 'default' => null),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'reponsablecargo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'fechafin' => array('type' => 'date', 'null' => false, 'default' => null),
		'tipo_auditoria' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf32', 'collate' => 'utf32_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'proceso' => 'Lorem ipsum dolor sit amet',
			'auditoria_id' => 1,
			'proceso_id' => 1,
			'fecha' => '2016-11-05',
			'fechaAuditoria' => '2016-11-05',
			'horaInicio' => '18:54:50',
			'horaFin' => '18:54:50',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'reponsablecargo' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-11-05',
			'modified' => '2016-11-05',
			'fechafin' => '2016-11-05',
			'tipo_auditoria' => 'Lorem ipsum dolor sit amet'
		),
	);

}
