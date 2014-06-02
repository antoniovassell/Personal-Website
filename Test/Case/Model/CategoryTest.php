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
		$categories = $this->Category->getCategoriesWithTotalPost();
		$this->Category->Post->save($post);
		foreach ($categories as $category) {
			$this->assertEquals($category['Category']['post_count'], count($category['Post']));
		}
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
