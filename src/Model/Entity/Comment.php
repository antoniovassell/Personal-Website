<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity.
 */
class Comment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email_address' => true,
        'comment' => true,
        'date' => true,
        'post_id' => true,
        'is_spam' => true,
        'post' => true,
    ];
}
