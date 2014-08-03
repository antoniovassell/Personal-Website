<?php
App::uses('MessagesController', 'Controller');

/**
 * MessagesController Test Case
 *
 */
class MessagesControllerTest extends ControllerTestCase {

	/**
	 * Fixtures
	 *
	 * @var array
	 */
	public $fixtures = array(
		'app.message',
	);

	public function setUp() {
	}
	/**
	 * testAdd method
	 *
	 * @return void
	 */
	public function testSendMessage() {
		$Messages = $this->generate('Messages', array(
			'components' => array(
				'Session'
			)
		));
		$Messages->Session
			->expects($this->once())
			->method('setFlash')
			->with('Your message was sent');
		$this->testAction('/messages/send_message', array(
			'data' => array(
				'Message' => array(
					'name' => 'test',
					'email_address' => 'test@test.com',
					'subject' => 'test',
					'message' => 'test',
					'url' => null
				)
			)
		));
	}

/**
 * Test SendMessage as spam
 *
 * @return void
 */
	public function testSendmessageSpam() {
		$Messages = $this->generate('Messages', array(
			'components' => array(
				'Session'
			)
		));
		$Messages->Session
			->expects($this->once())
			->method('setFlash')
			->with('Oops, something went wrong');
		$this->testAction('/messages/send_message', array(
			'data' => array(
				'Message' => array(
					'name' => 'test',
					'email_address' => 'test@test.com',
					'subject' => 'test',
					'message' => 'test',
					'url' => 'test'
				)
			)
		));
	}
}
