<?php

return [
    'driver' => 'pdo_sqlsrv',
    'host' => ' dbhackathon.database.windows.net',
    'database' => 'hack',
    'username' => 'hack',
    'password' => 'Password23',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
