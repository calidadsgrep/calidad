<?php
/**
 * Medicamento Fixture
 */
class MedicamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'paciente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dosis' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'horaSuminstro' => array('type' => 'time', 'null' => false, 'default' => null),
		'efecto' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'nombre' => 'Lorem ipsum dolor sit amet',
			'dosis' => 1,
			'horaSuminstro' => '17:03:00',
			'efecto' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-10-01',
			'modified' => '2016-10-01'
		),
	);

}
