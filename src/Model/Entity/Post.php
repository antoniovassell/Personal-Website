<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity.
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'slug' => true,
        'title' => true,
        'content' => true,
        'date_published' => true,
        'post_view_count' => true,
        'comment_count' => true,
        'preview' => true,
        'image' => true,
        'category_id' => true,
        'published' => true,
        'keywords' => true,
        'category' => true,
        'comments' => true,
        'post_views' => true,
    ];
}
