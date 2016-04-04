<?php
namespace App\View\Helper;
use Cake\View\Helper;

class MyFormHelper extends Helper\FormHelper
{
	protected $_defaultConfig = [
	'errorClass' => 'error',
	'templates' => [
	'label' => '<label for="{{for}}">{{content}}</label>',
	],
	];	
    public function error($field, $text = null, array $options = []) 
    {
        if (!isset($options['escape'])) {
            $options['escape'] = false;
        }

        return parent::error($field, $text, $options);
    }
}