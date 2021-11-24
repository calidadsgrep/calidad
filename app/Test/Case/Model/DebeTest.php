<?php
App::uses('Debe', 'Model');

/**
 * Debe Test Case
 */
class DebeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.debe',
		'app.subnormaindice',
		'app.subnorma',
		'app.normageneral',
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
		$this->Debe = ClassRegistry::init('Debe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Debe);

		parent::tearDown();
	}

}
