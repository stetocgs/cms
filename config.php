<?php

return [
    'database' => [
        'name' => 'cms',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'session'  => [
        'storage_name' => 'my_data',
        'current_user' => 'username',
        'session_id'   => 'session_hash'
    ]
];
