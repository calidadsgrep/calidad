<?php
/**
 * Indicesplanificacion Fixture
 */
class IndicesplanificacionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sudnormaindice_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'planauditoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'sudnormaindice_id' => 1,
			'planauditoria_id' => 1,
			'created' => '2016-10-21',
			'modified' => '2016-10-21'
		),
	);

}
