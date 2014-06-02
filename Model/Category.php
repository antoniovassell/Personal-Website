<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Post $Post
 */
class Category extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'category_id'
		)
	);

/**
 * Get Categories with total post
 *
 * @param int $limit 	Default amount that the query should return
 * @return array
 */
	public function getCategoriesWithTotalPost($limit = 5) {
		$categories = $this->find('all', array('limit' => $limit));
		return $categories;
	}
}
