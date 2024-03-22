<?php

namespace App\DAO;

use \PDO;

class ProdutoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectProd($inicio, $limite)
    {
        $sql = "SELECT * FROM tbl_produto ORDER BY Nome LIMIT ?, ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $inicio, PDO::PARAM_INT);
        $stmt->bindParam(2, $limite, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectcountProd()
    {
        $sql = "SELECT COUNT(*) COUNT FROM tbl_produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $contagem = $stmt->fetch(PDO::FETCH_ASSOC);

        return $contagem;
    }

    public function selectById($id)
    {
        $sql = "SELECT CodigoBarras, Nome, ValorUnitario, Qtd FROM tbl_produto WHERE CodigoBarras = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\ProdutoModel");
    }

    public function insertProd($CodBarras, $Nome, $Preco, $Qtd)
    {
        $sql = "call spInsertProd(?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $CodBarras);
        $stmt->bindValue(2, $Nome);
        $stmt->bindValue(3, $Preco);
        $stmt->bindValue(4, $Qtd);
        $stmt->execute();
    }

    public function updateProd($CodBarras, $Nome, $Preco)
    {   
        $sql = "UPDATE tbl_produto SET Nome = ?, ValorUnitario = ? WHERE CodigoBarras = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Nome);
        $stmt->bindValue(2, $Preco);
        $stmt->bindValue(3, $CodBarras);
        $stmt->execute();
    }

    public function deleteProd($CodBarras)
    {
        $sql = "DELETE FROM tbl_produto WHERE CodigoBarras = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $CodBarras);
        $stmt->execute();
    }
}
