<?php

namespace App\Model;
use App\DAO\PedidoDAO;

class PedidoModel
{
    public $pedido = [], $cnpj;

    public function addPedido()
    {
        $dao = new PedidoDAO();
        $dao->insertPedido($this->pedido, $this->cnpj);
    }

    public function ultimaNF()
    {
        $dao = new PedidoDAO();
        $obj = $dao->selectNF();

        return $obj;
    }
}