<?php
App::uses('AppController', 'Controller');

/**
 * Subscriptions Controller
 *
 * @property Post $Post
 */
class SubscriptionsController extends AppController {

/**
 * Name
 *
 * @var mixed
 */
	public $name = 'Subscriptions';

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'Search.Prg',
		'Paginator'
	);

/**
 * Before filter
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->deny(array('admin_index'));
	}

/**
 * Subscribe action
 *
 * @return void
 */
	public function subscribe() {
		if ($this->request->is('post')) {
			if ($this->Subscription->subscribe($this->request->data)) {
				$this->Session->setFlash(__('Thanks for subscribing!'), 'default', array('class' => 'alert alert-success'));
			} else {
				$this->Session->setFlash(__('Oops, seems like you already subscribed'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->data = $this->Subscription->data;
		return $this->redirect($this->referer('/'));
	}

/**
 * Admin Index view
 *
 * @return void
 */
	public function admin_index() {
		$subscriptions = $this->Paginator->paginate();
		$this->set(compact('subscriptions'));
	}
}