<?php
/**
 * Auditoria Fixture
 */
class AuditoriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'empresa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'proceso' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'responsableProceso' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'fechaAplicacion' => array('type' => 'date', 'null' => false, 'default' => null),
		'horaInicio' => array('type' => 'time', 'null' => false, 'default' => null),
		'horaFin' => array('type' => 'time', 'null' => false, 'default' => null),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'empresa_id' => 1,
			'proceso' => 'Lorem ipsum dolor sit amet',
			'responsableProceso' => 'Lorem ipsum dolor sit amet',
			'fechaAplicacion' => '2016-10-14',
			'horaInicio' => '17:21:35',
			'horaFin' => '17:21:35',
			'created' => '2016-10-14',
			'modified' => '2016-10-14'
		),
	);

}
