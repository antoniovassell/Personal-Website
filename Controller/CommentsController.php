<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {

/**
 * Name
 *
 * @var string
 */
	public $name = 'Comments';

/**
 * Add new comment
 *
 * @return array	Json formatted array of response
 */
	public function add() {
		$this->autoRender = false;
		$result = array('success' => false, 'message' => '');
		if ($this->request->is('post') || $this->request->is('put')) {
			$result = $this->Comment->add($this->request->data);
		}
		if ($result['success'] === false) {
			$this->Session->setFlash(
				__('Your comment could not be added'),
				'default',
				array('class' => 'alert alert-danger')
			);
		} else {
			$this->Session->setFlash(
				__('Your comment was added successfully'),
				'default',
				array('class' => 'alert alert-success')
			);
		}
		return json_encode($result);
	}
}
