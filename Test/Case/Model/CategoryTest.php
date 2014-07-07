<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 * @property Category $Category
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * Test Get Categories with total post
 *
 * @return void
 */
	public function testGetCategoriesWithTotalPost() {
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
		$this->Category->Post->save($post);
		$categories = $this->Category->getCategoriesWithTotalPost();
		$categoryId = $categories[0]['Category']['id'];
		$postCount = $this->Category->Post->find('count', array('conditions' => array('category_id' => $categoryId)));

		$this->assertEquals($categories[0]['Category']['post_count'], $postCount);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
