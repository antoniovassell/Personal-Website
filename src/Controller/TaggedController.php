<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tagged Controller
 *
 * @property \App\Model\Table\TaggedTable $Tagged
 */
class TaggedController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags']
        ];
        $this->set('tagged', $this->paginate($this->Tagged));
        $this->set('_serialize', ['tagged']);
    }

    /**
     * View method
     *
     * @param string|null $id Tagged id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tagged = $this->Tagged->get($id, [
            'contain' => ['Tags']
        ]);
        $this->set('tagged', $tagged);
        $this->set('_serialize', ['tagged']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tagged = $this->Tagged->newEntity();
        if ($this->request->is('post')) {
            $tagged = $this->Tagged->patchEntity($tagged, $this->request->data);
            if ($this->Tagged->save($tagged)) {
                $this->Flash->success('The tagged has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tagged could not be saved. Please, try again.');
            }
        }
        $tags = $this->Tagged->Tags->find('list', ['limit' => 200]);
        $this->set(compact('tagged', 'tags'));
        $this->set('_serialize', ['tagged']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tagged id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tagged = $this->Tagged->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tagged = $this->Tagged->patchEntity($tagged, $this->request->data);
            if ($this->Tagged->save($tagged)) {
                $this->Flash->success('The tagged has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tagged could not be saved. Please, try again.');
            }
        }
        $tags = $this->Tagged->Tags->find('list', ['limit' => 200]);
        $this->set(compact('tagged', 'tags'));
        $this->set('_serialize', ['tagged']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tagged id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tagged = $this->Tagged->get($id);
        if ($this->Tagged->delete($tagged)) {
            $this->Flash->success('The tagged has been deleted.');
        } else {
            $this->Flash->error('The tagged could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
