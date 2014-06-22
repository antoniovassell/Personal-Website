<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 * @property Post $Post
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
		'app.post',
		'app.postView',
		'app.comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}

/**
 * Test Get recent posts list
 *
 * @return array 	List of recent post in full
 */
	public function testGetRecentPostsList() {
		$post = array(
			'title' => 'Just for test',
			'content' => 'Just for test',
			'date_published' => date('Y-m-d H:i:s'),
			'created' => '2014-06-02 01:03:35',
			'modified' => '2014-06-02 01:05:39',
			'post_view_count' => 0,
			'comment_count' => 0,
			'preview' => '<p>test</p>',
			'image' => 'test',
			'category_id' => 1,
			'published' => true
		);
		$this->Post->save($post);
		$result = $this->Post->getRecentPostsList();
		$this->assertEquals($post['date_published'], $result[0]['Post']['date_published']);
	}

/**
 * Test Get recent posts list
 *
 * @return array 	List of recent post in full
 */
	public function testGetPopularPostsList() {
		$post = $this->Post->find('all',
			array(
				'order' => 'post_view_count DESC',
				'conditions' => array('published' => true),
				'fields' => array(
					'Post.id',
					'Post.slug',
					'Post.title',
					'Post.post_view_count',
					'Post.date_published'
				)
			)
		);
		$result = $this->Post->getPopularPostsList();
		$this->assertEquals($post, $result);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}

}
