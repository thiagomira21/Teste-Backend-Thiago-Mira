<?php

namespace app\Controllers;

class HomeController{

    public function index($params)
    {

      $users = all('login');


       return [ 
         'view' => 'Home.php',
         'data' => ['title' => 'Home','users' => $users]
       ];
 
    }
}