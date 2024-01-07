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
}