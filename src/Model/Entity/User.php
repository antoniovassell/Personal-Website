<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'slug' => true,
        'password' => true,
        'password_token' => true,
        'email' => true,
        'email_verified' => true,
        'email_token' => true,
        'email_token_expires' => true,
        'tos' => true,
        'active' => true,
        'last_login' => true,
        'last_action' => true,
        'is_admin' => true,
        'role' => true,
    ];
}
