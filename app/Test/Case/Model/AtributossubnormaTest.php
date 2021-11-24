<?php
App::uses('Atributossubnorma', 'Model');

/**
 * Atributossubnorma Test Case
 */
class AtributossubnormaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.atributossubnorma',
		'app.subnorma'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Atributossubnorma = ClassRegistry::init('Atributossubnorma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Atributossubnorma);

		parent::tearDown();
	}

}
