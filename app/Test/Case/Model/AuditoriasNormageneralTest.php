<?php
App::uses('AuditoriasNormageneral', 'Model');

/**
 * AuditoriasNormageneral Test Case
 */
class AuditoriasNormageneralTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.auditorias_normageneral',
		'app.auditoria',
		'app.empresa',
		'app.normageneral'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AuditoriasNormageneral = ClassRegistry::init('AuditoriasNormageneral');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AuditoriasNormageneral);

		parent::tearDown();
	}

}
