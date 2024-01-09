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
}
