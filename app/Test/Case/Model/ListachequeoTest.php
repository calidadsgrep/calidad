<?php
App::uses('Listachequeo', 'Model');

/**
 * Listachequeo Test Case
 */
class ListachequeoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.listachequeo',
		'app.planauditoria',
		'app.debe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Listachequeo = ClassRegistry::init('Listachequeo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Listachequeo);

		parent::tearDown();
	}

}
