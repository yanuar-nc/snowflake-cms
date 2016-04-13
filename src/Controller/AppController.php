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
use Cake\Core\Configure;
// use Cake\Network\Exception\NotFoundException;

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

    public $helpers = [
        // 'Form' => [ 'className' => 'MyForm' ]
    ];

    public $auth_id;
    public $auth_role;

    public $model_name   = 'Page';
    public $module_title = 'Snowflake CMS';
    public $module_description = 'A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.';
    public $module_icon        = 'fa fa-home';

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Repository');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Csrf');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [ 'username' => 'username', 'password' => 'password' ], // Bisa diubah kalau mau login pake email
                ]
            ],
            'finder' => 'auth',
            // 'authError' => 'Did you really think you are allowed to see that?',
            'loginRedirect' =>  [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'home'
            ]
        ] );

        $this->set( 'form_templates', Configure::read( 'Templates' ) );
        // $this->viewBuilder()->layout( 'default' );

    }

    public function beforeFilter( Event $event )
    {

        $this->Auth->allow(['view', 'display']);

        // data user jika udah login
        if( $this->Auth->user() )
        {
            $auth_data          = $this->Auth->user();
            $auth_id            = $this->auth_id = $auth_data[ 'id' ];
            $auth_role          = $this->auth_role = $auth_data[ 'role' ];
            $auth_display_name  = $auth_data[ 'display_name' ];
            $auth_username      = $auth_data[ 'username' ];
            $auth_picture_dir   = '';
            //$auth_picture_dir   = '/files/user/picture/' . $auth_data[ 'picture_dir' ] . '/';
            $auth_picture       = $auth_picture_dir . 'cake-logo.png'; //. $auth_data[ 'picture' ];
            
        }

        $var_model      = $this->model_name;
        $var_controller = $this->request->controller;
        $var_action     = $this->action;

        $module_title   = $this->module_title;
        $module_desc    = $this->module_desc;
        $module_icon    = $this->module_icon;

        $title_for_layout = $module_title;

        $this->set(
            compact(
                'var_model',
                'var_controller',
                'var_action',
                'module_title',
                'module_desc',
                'title_for_layout',
                'module_icon',
                'auth_id',
                'auth_role',
                'auth_display_name',
                'auth_username',
                'auth_picture'
            )
        );

    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        if ( $this->name = 'Error' )
        {
            // pr('ads'); exit;
        }
    }
}
