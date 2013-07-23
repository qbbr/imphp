<?php

return [
    'dsn' => 'mysql:host=localhost;dbname=test',
    'username' => 'test',
    'password' => 'test123',
    'options' => [
        \PDO::ATTR_PERSISTENT => true,
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]
];
