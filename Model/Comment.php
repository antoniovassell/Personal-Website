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
			'foreignKey' => 'post_id',
			'counterCache' => true
		)
	);

/**
 * Add new comment
 *
 * @param $postData
 * @return array
 */
	public function add($postData) {
		$result = array('success' => false, 'message' => 'What the hell?');
		$postData['Comment']['date'] = date('Y-m-d H:i:s');
		$this->set($postData);
		$this->create($postData);
		if ($this->validates()) {
			if ($this->save($this->data)) {
				$result['success'] = true;
			}
		}
		return $result;
	}
}
