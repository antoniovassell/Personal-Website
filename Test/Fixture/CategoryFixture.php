<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Import definition
 *
 * @var string
 */
	public $import = 'Category';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Science',
			'post_count' => 1
		),
		array(
			'id' => 2,
			'name' => 'Information Technology',
			'post_count' => 2
		),
		array(
			'id' => 3,
			'name' => 'Philosophy',
			'post_count' => 0
		)
	);

}
