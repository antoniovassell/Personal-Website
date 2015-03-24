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
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AdminController extends AppController
{

    use \Crud\Controller\ControllerTrait;

    /**
     * View class
     *
     * @var string
     */
    public $viewClass = 'CrudView\View\CrudView';

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
        'Paginator' => ['templates' => 'CrudView.paginator']
    ];

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'Crud.Index',
                'Crud.Add',
                'Crud.Edit',
                'Crud.View',
                'Crud.Delete'
            ],
            'listeners' => ['CrudView.View', 'Crud.RelatedModels', 'Crud.Redirect']
        ]
    ];

    public function initialize()
    {
        $this->layout = 'CrudView.default';
        parent::initialize();
    }
}
