<?php
App::uses('Medicamento', 'Model');

/**
 * Medicamento Test Case
 */
class MedicamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.medicamento',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Medicamento = ClassRegistry::init('Medicamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Medicamento);

		parent::tearDown();
	}

}
