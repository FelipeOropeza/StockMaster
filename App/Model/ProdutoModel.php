<?php

namespace App\Model;

use App\DAO\ProdutoDAO;

class ProdutoModel extends Model
{
    public $CodigoBarras, $Nome, $ValorUnitario, $Qtd;

    public function listaProduto()
    {
        $dao = new ProdutoDAO();

        $this->rows = $dao->selectProd();
    }

    public function getById($id)
    {
        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new ProdutoModel;
    }

    public function cadastroProd()
    {
        $dao = new ProdutoDAO();

        $dao->insertProd($this->CodigoBarras, $this->Nome, $this->ValorUnitario, $this->Qtd);
    }

    public function atulizarProd()
    {
        $dao = new ProdutoDAO();

        $dao->updateProd($this->CodigoBarras, $this->Nome, $this->ValorUnitario);
    }

    public function excluirProd()
    {
        $dao = new ProdutoDAO();

        $dao->deleteProd($this->CodigoBarras);
    }
}
