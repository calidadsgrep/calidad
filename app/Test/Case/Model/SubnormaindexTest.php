<?php
App::uses('Subnormaindex', 'Model');

/**
 * Subnormaindex Test Case
 */
class SubnormaindexTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subnormaindex',
		'app.subnorma',
		'app.normageneral',
		'app.atributossubnorma'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subnormaindex = ClassRegistry::init('Subnormaindex');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subnormaindex);

		parent::tearDown();
	}

}
