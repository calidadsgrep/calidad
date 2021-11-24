<?php
/**
 * Novedade Fixture
 */
class NovedadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'paciente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'planAccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'resultado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valorNovedad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
		'hora' => array('type' => 'time', 'null' => false, 'default' => null),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modi' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'paciente_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'planAccion' => 'Lorem ipsum dolor sit amet',
			'resultado' => 'Lorem ipsum dolor sit amet',
			'valorNovedad' => 1,
			'fecha' => '2016-10-01',
			'hora' => '17:07:30',
			'created' => '2016-10-01',
			'modi' => '2016-10-01'
		),
	);

}
