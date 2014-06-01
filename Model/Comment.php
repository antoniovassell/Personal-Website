<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 */
class Comment extends AppModel {

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
		'email_address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'comment' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'date' => array(
			'datetime' => array(
				'rule' => array('datetime')
			),
		),
	);

/**
 * Belongs To
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id'
		)
	);
}
