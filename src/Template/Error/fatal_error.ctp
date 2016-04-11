<?php
use Cake\Core\Configure;

if (Configure::read('debug')):
    $this->layout = 'error';

    $this->assign('title', $message);

    $this->start('file');
endif;
?>