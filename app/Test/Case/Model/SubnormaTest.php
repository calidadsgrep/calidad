<?php
App::uses('Subnorma', 'Model');

/**
 * Subnorma Test Case
 */
class SubnormaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subnorma',
		'app.normageneral',
		'app.auditoria',
		'app.empresa',
		'app.auditor',
		'app.auditorias_normageneral',
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
		$this->Subnorma = ClassRegistry::init('Subnorma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subnorma);

		parent::tearDown();
	}

}
