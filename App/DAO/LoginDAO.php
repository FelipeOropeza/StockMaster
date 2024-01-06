<?php

namespace App\DAO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selecLogin($email, $senha)
    {
        $sql = "SELECT Id_Login, Nome, Email, Senha, Acesso FROM tbl_login where Email = ? AND Senha = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        $result = $stmt->fetchObject("App\Model\LoginModel");
        return $result;
    }
}