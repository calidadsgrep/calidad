<?php
App::uses('Auditor', 'Model');

/**
 * Auditor Test Case
 */
class AuditorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditor',
		'app.empresa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Auditor = ClassRegistry::init('Auditor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auditor);

		parent::tearDown();
	}

}
