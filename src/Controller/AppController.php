<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = [
        'Form' => [
            'errorClass' => 'form-control',
            'templates' => 'app_form_vertical',
            'widgets' => [
                'date' => [
                    'MyDate'
                ],
                'datetime' => [
                    'MyDateTime'
                ]
            ]
        ],
        'Frontend' => [
            'className' => 'Frontend.Frontend'
        ]
    ];

    /**
     * Components
     *
     * @var array
     */
    public $components = [
        'Auth' => [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => false,
                'prefix' => false
            ],
            'loginRedirect' => [
                'controller' => 'Posts',
                'action' => 'dashboard',
                'prefix' => 'admin'
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'
            ]
        ]
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('Flash');
    }

    /**
     * Before filter callback
     *
     * @param Event $event
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['display']);
    }

    /**
     * BeforeRender callback
     *
     * @param Event $event
     * @return void
     */
    public function beforeRender(Event $event)
    {
        $this->set('userData', $this->Auth->user());
    }
}
