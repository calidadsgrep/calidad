<?php
/**
 * Atributossubnorma Fixture
 */
class AtributossubnormaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'subnorma_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
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
			'subnorma_id' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-10-14',
			'modified' => '2016-10-14'
		),
	);

}
