<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $components = [
        'Burzum/UserTools.UserTool'
    ];

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = [
        'Burzum/UserTools.Auth'
    ];
}
