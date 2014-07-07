<?php
App::uses('Message', 'Model');

/**
 * Message Test Case
 *
 * @property Message $Message
 */
class MessageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.message'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Message = ClassRegistry::init('Message');
	}

/**
 * Test Message add function
 *
 * @return void
 */
	public function testAdd() {
		// Test message saves
		$message = array(
			'Message' => array(
				'name' => 'Antonio Vassell',
				'email_address' => 'antoniovassell@gmail.com',
				'subject' => 'Test subject',
				'message' => 'This is a test message'
			)
		);
		$sentMessage = $this->Message->add($message);
		$this->assertTrue(!empty($sentMessage));

		// Test email validation works
		$message = array(
			'Message' => array(
				'name' => 'Antonio Vassell',
				'email_address' => 'antoniovassellgmail.com',
				'subject' => 'Test subject',
				'message' => 'This is a test message'
			)
		);
		$sentMessage = $this->Message->add($message);
		$this->assertTrue(empty($sentMessage));
	}

/**
 * Test sendMeEmail
 */
	public function testSendMeEmail() {
		$message = array(
			'Message' => array(
				'name' => 'Antonio Vassell',
				'email_address' => 'antoniovassell@gmail.com',
				'subject' => 'Test subject',
				'message' => 'This is a test message'
			)
		);
		$this->assertTrue($this->Message->sendMeEmail($message));
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Message);
		parent::tearDown();
	}

}
