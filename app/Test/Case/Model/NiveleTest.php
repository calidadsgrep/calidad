<?php
App::uses('Nivele', 'Model');

/**
 * Nivele Test Case
 */
class NiveleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nivele'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nivele = ClassRegistry::init('Nivele');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nivele);

		parent::tearDown();
	}

}
