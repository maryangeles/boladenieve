<?php
App::uses('Group', 'Model');

/**
 * Group Test Case
 *
 */
class GroupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.group', 'app.user', 'app.presupuesto', 'app.departamento', 'app.proceso', 'app.catalogo', 'app.subcidio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Group = ClassRegistry::init('Group');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Group);

		parent::tearDown();
	}

}
