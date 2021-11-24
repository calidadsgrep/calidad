<?php
App::uses('Novedade', 'Model');

/**
 * Novedade Test Case
 */
class NovedadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.novedade',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Novedade = ClassRegistry::init('Novedade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Novedade);

		parent::tearDown();
	}

}
