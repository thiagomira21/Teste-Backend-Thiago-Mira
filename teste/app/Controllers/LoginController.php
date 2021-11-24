<?php

namespace app\Controllers;

class LoginController
{

    public function index()
    {

        return [
            'view' => 'login/Login.php',
            'data' => ['title' => 'Login']
        ];
    }

    public function store()
    {

        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if (empty($user) || empty($senha)) {
            setFlash('message', 'Usuário ou Senha estão Inválido!');
            return redirect('/');
        }

        $usuario = findBy('login', 'user_login', $user);

        if (!$usuario) {
            setFlash('message', 'Usuário ou Senha estão Inválido!');
            return redirect('/');
        }

        if (!password_verify($senha, $usuario['senha_login'])) {
            setFlash('message', 'Usuário ou Senha estão Inválido!');
            return redirect('/');
        }
        session_start();
        $_SESSION['LOGGED'] = $usuario;
        return redirect('/home');
    }

    public function destroy()
    {
        session_start();
        unset($_SESSION['LOGGED']);
        session_destroy();


        return redirect('/');
    }
}
