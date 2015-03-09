<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity.
 */
class Message extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email_address' => true,
        'website' => true,
        'message' => true,
        'date' => true,
        'date_read' => true,
        'read' => true,
    ];
}
