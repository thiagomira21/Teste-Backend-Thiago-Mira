<?php

return [
    'POST' => [
        '/login' => 'LoginController@store',
        '/user/store' => 'UserController@store',
        '/user/editar' => 'UserController@editar',
        '/user/deletar' => 'UserController@destroy',

    ],
    'GET' => [
        '/home' => 'HomeController@index',
        '/user/create' => 'UserController@create',
        'user/[0-9]+' => 'UserController@show',
        '/' => 'LoginController@index',
        '/logout' => 'LoginController@destroy',
        '/user/edit/' => 'UserController@edit'
    ]

];
    
