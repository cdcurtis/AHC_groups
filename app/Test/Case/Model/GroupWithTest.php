<?php
App::uses('GroupWith', 'Model');

/**
 * GroupWith Test Case
 *
 */
class GroupWithTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group_with',
		'app.student'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GroupWith = ClassRegistry::init('GroupWith');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GroupWith);

		parent::tearDown();
	}

}
