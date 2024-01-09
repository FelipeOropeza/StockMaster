<?php

namespace App\DAO;

use \PDO;

class ProdutoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectProd()
    {
        $sql = "SELECT * FROM tbl_produto";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById($id)
    {
        $sql = "SELECT CodigoBarras, Nome, ValorUnitario, Qtd FROM tbl_produto WHERE CodigoBarras = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\ProdutoModel");
    }
}
