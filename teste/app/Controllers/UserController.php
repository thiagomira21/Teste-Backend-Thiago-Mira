<?php

namespace app\Controllers;

use CreateTable;

class UserController
{

  public function show($params)
  {
    if (isset($params['user'])) {
      $users = findBy('login', 'id_login', $params['user']);
      var_dump($users);
      die();
    }

    $users = findBy('login', 'id_login', $params['user']);
    var_dump($users);
    die();
  }

  public function create()
  {
    return [
      'view' => 'Cadastro/Create.php',
      'data' => ['title' => 'Create']
    ];
  }

  public function edit()
  {
    $users = all('login');

    return [
      'view' => 'Cadastro/Edit.php',
      'data' => ['title' => 'Edit', 'users' => $users]
    ];
  }

  public function store()
  {
    $user_login = $_POST["user_login"];
    $email = $_POST["email"];
    $senha_login = $_POST["senha_login"];
    $senha_login = password_hash($senha_login, PASSWORD_DEFAULT);

    $cadastro =  new CreateTable();

    $cadastro->setUser_login($user_login);
    $cadastro->setEmail($email);
    $cadastro->setSenha_login($senha_login);

    $cadastro->createData();
  }

  public function editar()
  {
    $user_login = $_POST["user_login"];
    $email = $_POST["email"];
    $senha_login = $_POST["senha_login"];
    $senha_login = password_hash($senha_login, PASSWORD_DEFAULT);

    $editar =  new CreateTable();

    $editar->setUser_login($user_login);
    $editar->setEmail($email);
    $editar->setSenha_login($senha_login);

    $editar->editData();
  }

  public function buscar(){
    $conn = Connect();
    $stmt = $conn->prepare("SELECT id_login FROM login");
    $stmt->execute();
    return $stmt->fetchAll();

  }

  public function destroy($params)
  {

    $id_login = $_POST["id_login"];

    $deletar =  new CreateTable();

    $deletar->setId_login($id_login);

    
    $deletar->deleteData();
  }
}
