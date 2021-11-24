<?php
/**
 * Listachequeo Fixture
 */
class ListachequeoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'planauditoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'debe_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'observacion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'hallazgos' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'aspectospositivos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'observacion2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 2500, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
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
			'planauditoria_id' => 1,
			'debe_id' => 1,
			'observacion' => 'Lorem ipsum dolor sit amet',
			'hallazgos' => 'Lorem ipsum dolor sit amet',
			'aspectospositivos' => 'Lorem ipsum dolor sit amet',
			'observacion2' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-10-29',
			'modified' => '2016-10-29'
		),
	);

}
