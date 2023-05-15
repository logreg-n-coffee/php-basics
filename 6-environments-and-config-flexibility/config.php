<?php

return $config = array(
    'database' => array(
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'php_study_code',
        'charset' => 'utf8mb4',
        'user' => "root",
        'password' => "Ryan1023",
    ),
    'services' => array(
        'prerender' => array(
            'token' => 'token',
            'secret' => 'secret',
        ),
    ),
);