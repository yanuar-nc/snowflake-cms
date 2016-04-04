<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class LeadersTable extends Table
{

    public function initialize(array $config)
    {
    	$this->hasMany( 'User', 
    		[ 
    			'className' => 'Users',
    		] 
    	);
        $this->table('leaders');
    }

}

