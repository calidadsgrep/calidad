<?php
/**
 * Paciente Fixture
 */
class PacienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fechaIngreso' => array('type' => 'date', 'null' => false, 'default' => null),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'perfilIngreso' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fechaNacimiento' => array('type' => 'date', 'null' => false, 'default' => null),
		'telefono' => array('type' => 'date', 'null' => false, 'default' => null),
		'eps_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'seguroFunerario' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nombresContacto1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'telefonoContacto1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'identificacionContacto1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombresContacto2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'telefonoContacto2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'direccionContacto1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'valorServicio' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'horaIngreso' => array('type' => 'time', 'null' => false, 'default' => null),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'modified' => array('type' => 'date', 'null' => false, 'default' => null),
		'diasPermanencia' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'cliente_id' => 1,
			'fechaIngreso' => '2016-10-01',
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'perfilIngreso' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fechaNacimiento' => '2016-10-01',
			'telefono' => '2016-10-01',
			'eps_id' => 1,
			'seguroFunerario' => 'Lorem ipsum dolor sit amet',
			'nombresContacto1' => 'Lorem ipsum dolor sit amet',
			'telefonoContacto1' => 1,
			'identificacionContacto1' => 1,
			'nombresContacto2' => 1,
			'telefonoContacto2' => 1,
			'direccionContacto1' => 1,
			'valorServicio' => 1,
			'horaIngreso' => '17:09:00',
			'created' => '2016-10-01',
			'modified' => '2016-10-01',
			'diasPermanencia' => 1
		),
	);

}
