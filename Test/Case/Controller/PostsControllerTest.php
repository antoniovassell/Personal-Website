<?php
App::uses('PostsController', 'Controller');

/**
 * PostsController Test Case
 *
 */
class PostsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post',
		'app.category'
	);

	public function setUp() {
	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$Posts = $this->generate('Posts', array(
			'components' => array(
				'Session'
			)
		));
		$Posts->Session
			->expects($this->once())
			->method('setFlash');

		$this->testAction('/posts/add', array(
			'data' => array(
				'Post' => array('title' => 'New Post')
			)
		));
		$this->assertContains('/posts', $this->headers['Location']);
	}
}
