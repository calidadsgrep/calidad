<?php
App::uses('Facturacione', 'Model');

/**
 * Facturacione Test Case
 */
class FacturacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.facturacione',
		'app.cliente',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facturacione = ClassRegistry::init('Facturacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facturacione);

		parent::tearDown();
	}

}
