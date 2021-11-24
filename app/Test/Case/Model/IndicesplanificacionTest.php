<?php
App::uses('Indicesplanificacion', 'Model');

/**
 * Indicesplanificacion Test Case
 */
class IndicesplanificacionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.indicesplanificacion',
		'app.sudnormaindice',
		'app.planauditoria',
		'app.auditor',
		'app.empresa',
		'app.auditoria',
		'app.auditorias_normageneral',
		'app.normageneral',
		'app.subnorma',
		'app.atributossubnorma',
		'app.subnormaindex'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Indicesplanificacion = ClassRegistry::init('Indicesplanificacion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Indicesplanificacion);

		parent::tearDown();
	}

}
