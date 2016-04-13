<?php
use Cake\Core\Configure;

if (Configure::read('debug')):
	$this->layout = 'error';
endif;
?>
