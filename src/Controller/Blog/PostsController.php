<?php
namespace App\Controller\Blog;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AppController
{

    /**
     * Before filter callback
     *
     * @param Event $event
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['view', 'index', 'tags']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Tags', 'PostViews'],
            'conditions' => [
                'Posts.published' => true
            ]
        ];
        $this->set('posts', $this->paginate($this->Posts));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Categories', 'Tags', 'PostViews']
        ]);
        $this->set('post', $post);
        $this->set('page_title', $post->title);
        $this->set('_serialize', ['post']);
    }

    /**
     * Lists of tags
     *
     * @return void
     */
    public function tags()
    {
        $tags = $this->request->params['pass'];
        $posts = $this->Posts->find('tagged', [
            'tags' => $tags
        ]);
        $this->set(compact('posts', 'tags'));
    }
}
