<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PostViews Controller
 *
 * @property \App\Model\Table\PostViewsTable $PostViews
 */
class PostViewsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts']
        ];
        $this->set('postViews', $this->paginate($this->PostViews));
        $this->set('_serialize', ['postViews']);
    }

    /**
     * View method
     *
     * @param string|null $id Post View id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postView = $this->PostViews->get($id, [
            'contain' => ['Posts']
        ]);
        $this->set('postView', $postView);
        $this->set('_serialize', ['postView']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postView = $this->PostViews->newEntity();
        if ($this->request->is('post')) {
            $postView = $this->PostViews->patchEntity($postView, $this->request->data);
            if ($this->PostViews->save($postView)) {
                $this->Flash->success('The post view has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The post view could not be saved. Please, try again.');
            }
        }
        $posts = $this->PostViews->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postView', 'posts'));
        $this->set('_serialize', ['postView']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post View id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postView = $this->PostViews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postView = $this->PostViews->patchEntity($postView, $this->request->data);
            if ($this->PostViews->save($postView)) {
                $this->Flash->success('The post view has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The post view could not be saved. Please, try again.');
            }
        }
        $posts = $this->PostViews->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postView', 'posts'));
        $this->set('_serialize', ['postView']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post View id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postView = $this->PostViews->get($id);
        if ($this->PostViews->delete($postView)) {
            $this->Flash->success('The post view has been deleted.');
        } else {
            $this->Flash->error('The post view could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
