<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Import table definition
 *
 * @var string
 */
	public $import = 'Post';

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '5',
			'slug' => 'excellence_is_key_to_an_innovation_that_actually_makes_sense',
			'title' => 'Excellence is key to an innovation that actually makes sense',
			'content' => 'This is some test content',
			'date_published' => null,
			'created' => '2014-06-01 10:18:57',
			'modified' => '2014-06-02 01:06:14',
			'post_view_count' => 0,
			'comment_count' => 0,
			'preview' => 'There is alot of info here',
			'image' => '',
			'category_id' => 1,
			'published' => true
		),
		array(
			'id' => '6',
			'slug' => 'stephen_hawking_transcendence_looks_at_the_implications_of_artificial_intelligence_-_but_are_we_taking_ai_seriously_enough',
			'title' => 'Stephen Hawking: \'Transcendence looks at the implications of artificial intelligence - but are we taking AI seriously enough?',
			'content' => 'This is some test content',
			'date_published' => null,
			'created' => '2014-06-02 00:47:51',
			'modified' => '2014-06-02 00:52:48',
			'post_view_count' => 0,
			'comment_count' => 0,
			'preview' => 'Gracious me',
			'image' => '/uploads/images/pg-50-depp-1-alcon.jpg',
			'category_id' => 2,
			'published' => true
		),
		array(
			'id' => '7',
			'slug' => 'test',
			'title' => 'test',
			'content' => 'This is more test content',
			'date_published' => null,
			'created' => '2014-06-02 01:03:35',
			'modified' => '2014-06-02 01:05:39',
			'post_view_count' => 0,
			'comment_count' => 0,
			'preview' => '<p>test</p>',
			'image' => 'test',
			'category_id' => 2,
			'published' => true
		)
	);
}
