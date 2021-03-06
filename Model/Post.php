<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property PostView $PostView
 */
class Post extends AppModel {

/**
 * Acts as
 *
 * @var array
 */
	public $actsAs = array(
		'Utils.Sluggable',
		'Search.Searchable',
		'Tags.Taggable',
		'Containable'
	);

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Gravatar'
	);

/**
 * Filter Args
 *
 * @var array
 */
	public $filterArgs = array(
		'category_name' => array('type' => 'value', 'field' => 'Category.name'),
		'title' => array('type' => 'like'),
		'by' => array('type' => 'value', 'field' => 'Tag.keyname')
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
			'foreignKey' => 'post_id'
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'post_id'
		)
	);

/**
 * BelongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'counterCache' => true
		)
	);

/**
 *
 */
	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tags.Tag',
			'joinTable' => 'tagged',
			'foreignKey' => 'foreign_key',
			'associationForeignKey' => 'tag_id',
			'unique' => true,
			'conditions' => array('Tagged.model' => 'Post')
		)
	);

/**
 * Get recent post in full
 *
 * @param int $limit
 * @return array 	List of recent post in full
 */
	public function getRecentFull($limit = 5) {
		$posts = $this->find('all',
			array(
				'order' => 'date_published DESC',
				'limit' => $limit
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
		$post = $this->find(
			'first',
			array(
				'conditions' => array(
					'Post.slug' => $slug
				),
				'contain' => array(
					'Tag',
					'Comment' => array(
						'order' => 'Comment.date ASC'
					)
				)
			)
		);
		return $post;
	}

/**
 * Set items
 *
 * @return array
 */
	public function setItems() {
		$categories = $this->Category->find('list');
		return compact('categories');
	}

/**
 * Get recent post list
 *
 * @param int $limit
 * @return array
 */
	public function getRecentPostsList($limit = 5) {
		$posts = $this->find('all',
			array(
				'order' => 'date_published DESC',
				'limit' => $limit,
				'conditions' => array(
					'published' => true
				),
				'fields' => array(
					'Post.id',
					'Post.slug',
					'Post.title',
					'Post.post_view_count',
					'Post.date_published'
				)
			)
		);
		return $posts;
	}

/**
 * Get recent post list
 *
 * @param int $limit
 * @return array
 */
	public function getPopularPostsList($limit = 5) {
		$posts = $this->find('all',
			array(
				'order' => 'post_view_count DESC',
				'limit' => $limit,
				'conditions' => array(
					'published' => true
				),
				'fields' => array(
					'Post.id',
					'Post.slug',
					'Post.title',
					'Post.post_view_count',
					'Post.date_published'
				)
			)
		);
		return $posts;
	}

/**
 * Get popular tags list
 *
 * @param int $limit
 * @return array
 */
	public function getPopularTagsList($limit = 10) {
		return $this->Tagged->find('cloud', array('limit' => $limit));
	}
}
