<?php
App::uses('View', 'Model');

/**
 * View Test Case
 *
 */
class PostViewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.postView',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PostView = ClassRegistry::init('PostView');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostView);

		parent::tearDown();
	}

}
