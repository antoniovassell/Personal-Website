<?php
App::uses('AppModel', 'Model');
/**
 * PostView Model
 *
 * @property Post $Post
 */
class PostView extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'post_id' => array(
			'numeric' => array(
				'rule' => array('numeric')
			),
		),
		'date' => array(
			'datetime' => array(
				'rule' => array('datetime')
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'counterCache' => true
		)
	);
}
