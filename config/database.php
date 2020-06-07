<?php
return [
    'default' => 'mysql',
    'migrations' => 'migratioins',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
//            'strict' => true,
//            'prefix' => '',
//            'prefix_indexes' => true,
//            'engine' => null,
        ]
    ]
];
