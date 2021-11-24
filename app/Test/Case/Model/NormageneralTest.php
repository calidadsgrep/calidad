<?php
App::uses('Normageneral', 'Model');

/**
 * Normageneral Test Case
 */
class NormageneralTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.normageneral',
		'app.subnorma',
		'app.auditoria',
		'app.empresa',
		'app.auditor',
		'app.auditorias_normageneral'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Normageneral = ClassRegistry::init('Normageneral');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Normageneral);

		parent::tearDown();
	}

}
