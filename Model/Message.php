<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 */
class Message extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			)
		),
		'email_address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
			'email' => array(
				'rule' => array('email')
			)
		),
		'website' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			)
		),
		'message' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			)
		),
		'date' => array(
			'datetime' => array(
				'rule' => array('datetime')
			)
		),
		'read' => array(
			'boolean' => array(
				'rule' => array('boolean')
			)
		),
	);

/**
 * Add a new message sent from contact form and send an email if successful
 *
 * @param $postData
 * @return array|bool
 */
	public function add($postData) {
		if (!empty($postData)) {
			$postData['Message']['date'] = date('Y-m-d H:i:s');
			$this->set($postData);
			if ($this->validates()) {
				$this->create();
				$this->data = $this->save($postData);
				if ($this->sendMeEmail($this->data)) {
					return $this->data;
				}
			}
		}
		return false;
	}

/**
 * Send contact email to admin (me)
 *
 * @param $message
 * @return bool
 */
	public function sendMeEmail($message) {
		try {
			$this->getCakeInstance()
				->subject($message['Message']['subject'])
				->template('contact')
				->viewVars(array('message' => $message))
				->send();
			return true;
		} catch (Exception $e) {
			$this->log($e->getMessage());
			debug($e->getMessage());
			return false;
		}
	}
}
