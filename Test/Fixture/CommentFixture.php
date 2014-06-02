<?php
/**
 * CommentFixture
 *
 */
class CommentFixture extends CakeTestFixture {

/**
 * Import table definition
 *
 * @var string
 */
	public $import = 'Comment';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email_address' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet',
			'date' => '2014-06-01 01:17:01'
		),
	);

}
