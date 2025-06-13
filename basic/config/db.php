<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . env('DB_HOST', 'db') . ';dbname=' . env('MYSQL_DATABASE', 'yii2_basic'),
    'username' => env('MYSQL_USER', 'root'),
    'password' => env('MYSQL_PASSWORD', 'root'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
