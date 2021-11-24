<?php
App::uses('Planauditoria', 'Model');

/**
 * Planauditoria Test Case
 */
class PlanauditoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.planauditoria',
		'app.auditoria',
		'app.empresa',
		'app.usuario',
		'app.auditorias_normageneral',
		'app.normageneral',
		'app.subnorma',
		'app.atributossubnorma',
		'app.subnormaindex',
		'app.proceso',
		'app.indicesplanificacion',
		'app.subnormaindice',
		'app.debe',
		'app.informe',
		'app.lista'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Planauditoria = ClassRegistry::init('Planauditoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planauditoria);

		parent::tearDown();
	}

}
