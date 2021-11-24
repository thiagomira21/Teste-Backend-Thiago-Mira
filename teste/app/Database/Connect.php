<?php

function Connect()
{

    $host = '127.0.0.1';
    $db   = 'cadastro';
    $user = 'root';
    $pass = '';
    $port = "3306";


    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $dsn = "mysql:host=$host;dbname=$db;port=$port";

    return new \PDO($dsn, $user, $pass, $options);
}
