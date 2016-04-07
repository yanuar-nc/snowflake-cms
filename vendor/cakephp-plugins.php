<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Josegonzalez' => $baseDir . '/plugins/Josegonzalez/',
        'Josegonzalez/Upload' => $baseDir . '/vendor/josegonzalez/cakephp-upload/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Proffer' => $baseDir . '/vendor/davidyell/proffer/',
        'Utils' => $baseDir . '/vendor/cakemanager/cakephp-utils/',
        'Xety/Cake3Upload' => $baseDir . '/vendor/xety/cake3-upload/'
    ]
];
