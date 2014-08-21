<?php
App::uses('AppController', 'Controller');

/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {

/**
 * Before filter
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('categories_with_post_count'));
	}

/**
 * Get categories with total post count
 *
 * @param int  $limit
 * @return array
 */
	public function categories_with_post_count($limit = 5) {
		if ($this->request->is('requested')) {
			return $this->Category->getCategoriesWithTotalPost($limit);
		}
	}
}
