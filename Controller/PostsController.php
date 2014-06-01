<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 */

class PostsController extends AppController {

/**
 * Name
 *
 * @var mixed
 */
	public $name = 'Posts';

/**
 * Index
 *
 * @return void
 */
	public function index() {
		$recentPosts = $this->Post->getRecentFull();
		$this->set(compact('recentPosts'));
	}

/**
 * Add post
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				return $this->redirect('index');
			}
		}
	}

/**
 * View post
 *
 * @param string $slug
 * @return void
 */
	public function view($slug = null) {
		$post = array();
		if ($slug) {
			$post = $this->Post->getPost($slug);
		}
		$this->set(compact('post'));
	}

/**
 * Edit post
 *
 * @param int $id
 * @return void
 */
	public function edit($id) {
		if (!empty($this->request->data)) {
			if ($this->Post->save($this->request->data)) {
				return $this->redirect('index');
			}
		}
		$this->data = $this->Post->findById($id);
	}
}
