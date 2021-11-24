<?php 

function userLogged(){
    if(isset($_SESSION['LOGGED'])){
        return $_SESSION['LOGGED']['user_login'];
    }
}

function logged(){

    return isset($_SESSION['LOGGED']);
}