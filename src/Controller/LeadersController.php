<?php
namespace App\Controller;

class LeadersController extends AppController
{

	public function initialize()
	{
		parent::initialize();

	}

	public function index()
	{
		$datas = $this->Leaders->find( 'all' );
		$this->set( compact( 'datas' ) );
	}
}