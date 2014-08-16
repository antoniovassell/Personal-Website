<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Html' => array('className' => 'BootstrapHtml'),
		'Form' => array('className' => 'BootstrapForm'),
		'Paginator' => array('className' => 'BootstrapPaginator'),
		'Session',
		'AssetCompress.AssetCompress',
		'Tags.TagCloud'
	);

/**
 * Components
 * @var array
 */
	public $components = array(
		'Session',
		'Auth' => array(
			'loginAction' => array(
				'plugin' => 'users',
				'prefix' => null,
				'admin' => false,
				'controller' => 'users',
				'action' => 'login'
			)
		)
	);

/**
 * Before Filter
 *
 * @return void
 */
	public function beforeFilter() {
		$this->Auth->allow();
		$isAdmin = false;
		$this->set(compact('isAdmin'));
	}
}
