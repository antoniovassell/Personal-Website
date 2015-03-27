<?php
namespace App\View\Cell;

use Cake\View\Cell;

class PostCell extends Cell
{

    public function display()
    {
    }

    /**
     * Recent blog items
     *
     * @param int $limit
     */
    public function recent($limit = 4)
    {
        $this->loadModel('Posts');
        $posts = $this->Posts->find()->limit($limit)->contain(['Categories', 'Tags', 'PostViews']);
        $this->set('posts', $posts);
        $this->set('_serialize', ['post']);
    }
}
