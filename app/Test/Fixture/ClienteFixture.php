<?php
/**
 * Cliente Fixture
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'razonSocial' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'direccion' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'telefono_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'telefono_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'forma_pago' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'tipo' => 'Lorem ipsum dolor sit amet',
			'razonSocial' => 'Lorem ipsum dolor sit amet',
			'direccion' => 1,
			'telefono_1' => 1,
			'telefono_2' => 1,
			'forma_pago' => 1,
			'created' => '2016-10-01',
			'modified' => '2016-10-01'
		),
	);

}
