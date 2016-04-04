<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 *
 * @property \App\Model\Table\HomeTable $Home
 */
class HomeController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->model_name   = 'Home';
        $this->module_title = 'Home';
        $this->module_icon  = 'fa fa-home';

    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {

    }

}