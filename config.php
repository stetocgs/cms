<?php

return [
    'database' => [
        'name' => 'cms',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=127.0.0.1',
        'charset' => 'utf8',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'session'  => [
        'storage_name' => 'my_data'
    ]
];
