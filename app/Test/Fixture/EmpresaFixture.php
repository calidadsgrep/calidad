<?php
/**
 * Empresa Fixture
 */
class EmpresaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'razonSocial' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'nit' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'reponsable' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'municipio' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'telefono' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf32_general_ci', 'charset' => 'utf32'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'nit' => array('column' => 'nit', 'unique' => 1)
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
			'razonSocial' => 'Lorem ipsum dolor sit amet',
			'nit' => 1,
			'usuario_id' => 1,
			'tipo' => 'Lorem ipsum dolor sit amet',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'reponsable' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'municipio' => 'Lorem ipsum dolor sit amet',
			'telefono' => 1,
			'correo' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-11-05',
			'modified' => '2016-11-05'
		),
	);

}
