<?php
App::uses('Proceso', 'Model');

/**
 * Proceso Test Case
 */
class ProcesoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.proceso',
		'app.empresa',
		'app.usuario',
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
		$this->Proceso = ClassRegistry::init('Proceso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Proceso);

		parent::tearDown();
	}

}
