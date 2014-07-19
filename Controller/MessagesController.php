<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class MessagesController extends AppController {

/**
 * Send Message
 *
 * @return void
 */
	public function send_message() {
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Message->add($this->request->data)) {
				$this->Session->setFlash(
					__('Your message was sent'),
					'default',
					array('class' => 'alert alert-success')
				);
			} else {
				$this->Session->setFlash(
					__('Oops, something went wrong'),
					'default',
					array('class' => 'alert alert-danger')
				);
			}
		}
		return $this->redirect($this->referer());
	}

/**
 * Contact View
 *
 * @return void
 */
	public function contact() {
	}
}
