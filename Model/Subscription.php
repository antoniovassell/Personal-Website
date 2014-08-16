<?php
App::uses('AppModel', 'Model');

/**
 * Subscription Model
 *
 * @property Post $Post
 */
class Subscription extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email_address' => array(
			'Email address cannot be empty' => array(
				'rule' => 'notEmpty'
			),
			'Please enter a valid email address' => array(
				'rule' => 'email'
			),
			'You already subscribed' => array(
				'rule' => 'isUnique'
			)
		)
	);

/**
 * Subscribe
 *
 * @param array $postData Data that the user has posted
 * @return bool True if successfully
 */
	public function subscribe($postData) {
		$postData[$this->alias]['date'] = date('Y-m-d H:i:s');
		$this->create();
		$this->set($postData);
		if (!$this->validates()) {
			return false;
		}
		if ($this->save($postData)) {
			$this->subscriptionAlert($postData);
			return true;
		}
		return false;
	}

/**
 * Subscription alert
 *
 * @param array $data
 * @return void
 */
	public function subscriptionAlert($data) {
		$Email = $this->getCakeInstance();
		$Email->subject(__('Subscription alert'))
			->send(__('You have a new subscriber: %s', $data[$this->alias]['email_address']));
	}
}
