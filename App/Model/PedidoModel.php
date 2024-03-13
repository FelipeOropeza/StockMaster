<?php

namespace App\Model;
use App\DAO\PedidoDAO;

class PedidoModel
{
    public $pedido = [], $cnpj, $Nf;

    public function addPedido()
    {
        $dao = new PedidoDAO();
        $dao->insertPedido($this->pedido, $this->cnpj);
    }

    public function selectPed()
    {
        $dao = new PedidoDAO();
        $obj = $dao->selectViewPed($this->Nf);

        return $obj;
    }
}