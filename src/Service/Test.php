<?php

namespace App\Service;

use Cake\ORM\TableRegistry;

class Test {
	
	public function coba()
	{
		pr( $_SERVER ); exit;
	}


	public function checkId( $className, $id )
	{
		$model = ClassRegistry::init( $className );
        if( !$id )
        {
            throw new NotFoundException( __( MSG_DATA_NOT_FOUND ) );
        }
        
        $model->id = $id;
        if( !$model->exists() )
        {
            throw new NotFoundException( __( MSG_DATA_NOT_FOUND ) );
        }		
        return $model;
	}
}
