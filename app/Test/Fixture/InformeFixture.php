<?php
/**
 * Informe Fixture
 */
class InformeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'lista_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tipo_hallazgo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aspecto_positivo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'lista_id' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'tipo_hallazgo' => 'Lorem ipsum dolor sit amet',
			'aspecto_positivo' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-11-01',
			'modified' => '2016-11-01'
		),
	);

}
