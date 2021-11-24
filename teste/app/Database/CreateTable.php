<?php

class CreateTable
{

    function createData()
    {
        try {

            $conn = Connect();
            $stmt = $conn->prepare("INSERT INTO login (email,user_login,senha_login) values(:email,:user_login,:senha_login)");
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":user_login", $this->user_login);
            $stmt->bindParam(":senha_login", $this->senha_login);
           
            $stmt->execute();
            echo "<script>window.alert('Cadastrado com sucesso!');history.go(-1);</script>";
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

    function editData()
    {
        try {

            $conn = Connect();
            $stmt = $conn->prepare("UPDATE login SET user_login = :user_login, email = :email, senha_login = :senha_login");
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":user_login", $this->user_login);
            $stmt->bindParam(":senha_login", $this->senha_login);
           
            $stmt->execute();
            echo "<script>window.alert('Editado com sucesso!');history.go(-1);</script>";
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

    function deleteData(){
        try {
        $conn = Connect();
        $stmt = $conn->prepare("DELETE FROM login WHERE id_login = :id_login");
        $stmt->bindParam(":id_login", $this->id_login);
        $stmt->execute();
        echo "<script>window.alert('Deletado com sucesso!');history.go(-1);</script>";
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    }

    public function getId_login()
    {
        return $this->id_login;
    }

    public function getUser_login()
    {
        return $this->user_login;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSenha_login()
    {
        return $this->senha_login;
    }

    public function setId_login($id_login)
    {
        $this->id_login = $id_login;
    }

    public function setUser_login($user_login)
    {
        $this->user_login = $user_login;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha_login($senha_login)
    {
        $this->senha_login = $senha_login;
    }
}
