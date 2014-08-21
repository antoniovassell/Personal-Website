<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */

class PostsController extends AppController {

/**
 * Name
 *
 * @var mixed
 */
	public $name = 'Posts';

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
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Time'
	);

/**
 * Before Filter
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('index', 'add', 'view', 'recent_post_list', 'popular_post_list', 'popular_tags'));
	}

/**
 * Index
 *
 * @return void
 */
	public function index() {
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->Post->parseCriteria($this->Prg->parsedParams());
		$this->Paginator->settings['contain'] = array(
			'Category',
			'Tag'
		);

		if (isset($this->passedArgs['by'])) {
			$this->Paginator->settings['joins'] = array(
				array(
					'table' => 'tagged',
					'alias' => 'Tagged',
					'conditions' => array('Post.id = Tagged.foreign_key')
				),
				array(
					'table' => 'tags',
					'alias' => 'Tag',
					'conditions' => array('Tagged.tag_id = Tag.id')
				)
			);
		}

		$posts = $this->Paginator->paginate();
		$this->set(compact('posts'));
	}

/**
 * Add post
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect('index');
			} else {
				$this->Session->setFlash(__('Your post has not been saved'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$this->set($this->Post->setItems());
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
		$this->set($this->Post->setItems());
	}

/**
 * Delete post
 *
 * @param int $id
 * @return void
 */
	public function delete($id) {
		if ($id) {
			if ($this->Post->delete($id)) {
				$this->Session->setFlash(__('Post Deleted'));
				return $this->redirect('index');
			}
		}
	}

/**
 * Get recent post list
 *
 * @return array
 */
	public function recent_post_list() {
		if ($this->request->is('requested')) {
			return $this->Post->getRecentPostsList();
		}
	}

/**
 * Get recent post list
 *
 * @return array
 */
	public function popular_post_list() {
		if ($this->request->is('requested')) {
			return $this->Post->getPopularPostsList();
		}
	}

/**
 * Get popular tags list
 *
 * @return array
 */
	public function popular_tags() {
		if ($this->request->is('requested')) {
			return $this->Post->getPopularTagsList();
		}
	}
}
