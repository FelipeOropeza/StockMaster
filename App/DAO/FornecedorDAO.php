<?php

namespace App\DAO;

use \PDO;

class FornecedorDAO extends DAO
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function insertForne($cnpj, $nome, $tele)
    {
        $sql = "INSERT INTO tbl_fornecedor VALUES(DEFAULT, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $cnpj);
        $stmt->bindValue(2, $nome);
        $stmt->bindValue(3, $tele);
        $stmt->execute();
    }

    public function selectForne()
    {
        $sql = "SELECT * FROM tbl_fornecedor";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}