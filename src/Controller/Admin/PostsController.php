<?php
namespace App\Controller\Admin;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class PostsController extends AdminController
{

    /**
     * Paginate
     *
     * @var array
     */
    public $paginate = [
        'limit' => 25,
        'order' => [
            'Posts.modified' => 'desc'
        ]
    ];

    /**
     * Dashboard placeholder view
     *
     * @return void
     */
    public function dashboard()
    {
    }

    public function index()
    {
        $this->Crud->action()->config('scaffold.fields', [
            'id',
            'title',
            'preview',
            'category_id',
            'keywords',
            'published',
            'date_published',
            'created',
            'modified'
        ]);
        $this->Crud->execute();
    }

    /**
     * Add action
     *
     * @return void
     */
    public function add()
    {
        $this->Crud->action()->config('scaffold.fields', [
            'title',
            'preview',
            'content',
            'category_id',
            'keywords',
            'published'
        ]);
        $this->Crud->execute();
    }

    /**
     * Edit action
     *
     * @return void
     */
    public function edit()
    {
        $this->Crud->action()->config('scaffold.fields', [
            'title',
            'preview',
            'content',
            'category_id',
            'keywords',
            'published'
        ]);
        $this->Crud->execute();
    }
}
