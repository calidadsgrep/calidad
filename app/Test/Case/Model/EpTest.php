<?php
App::uses('Ep', 'Model');

/**
 * Ep Test Case
 */
class EpTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ep'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ep = ClassRegistry::init('Ep');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ep);

		parent::tearDown();
	}

}
