<?php

namespace App\DAO;

class LoginDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selecLogin($email)
    {
        $sql = "SELECT Id_Login, Nome, Email, Senha, Acesso FROM tbl_login where Email = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        $result = $stmt->fetchObject("App\Model\LoginModel");
        return $result;
    }

    public function insertLogin($nome, $email, $senha, $acesso)
    {
        $sql = "call spInsertLogin(?, ?, ?, ?);";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);
        $stmt->bindValue(4, $acesso);
        $stmt->execute();
    }
}
