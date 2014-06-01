<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property View $View
 */
class Post extends AppModel {

/**
 * Acts as
 *
 * @var array
 */
	public $actsAs = array(
		'Utils.Sluggable'
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'slug' => array(
			'numeric' => array(
				'rule' => array('notEmpty')
			),
		),
		'title' => array(
			'numeric' => array(
				'rule' => array('notEmpty')
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'view_count' => array(
			'numeric' => array(
				'rule' => array('numeric')
			),
		),
		'comment_count' => array(
			'numeric' => array(
				'rule' => array('numeric')
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PostView' => array(
			'className' => 'PostView',
			'foreignKey' => 'post_id',
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'post_id'
		)
	);

/**
 * Get recent post in full
 *
 * @return array 	List of recent post in full
 */
	public function getRecentFull() {
		$posts = $this->find('all',
			array(
				'order' => 'date_published DESC'
			)
		);
		return $posts;
	}

/**
 * Get post
 *
 * @param string 	$slug Slug of post to return
 * @return array 	List of recent post in full
 */
	public function getPost($slug) {
		$post = $this->find('first', array('conditions' => array('Post.slug' => $slug)));
		return $post;
	}
}
