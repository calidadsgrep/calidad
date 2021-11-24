<?php
/**
 * AuditoriasNormageneral Fixture
 */
class AuditoriasNormageneralFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'auditoria_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'normageneral_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'auditoria_id' => 1,
			'normageneral_id' => 1,
			'created' => '2016-10-14',
			'modified' => '2016-10-14'
		),
	);

}
