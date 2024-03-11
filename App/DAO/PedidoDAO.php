<?php

namespace App\DAO;

use \PDO;

class PedidoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertPedido($dados = [], $codForne)
    {
        $Nf = rand(1, 1000);
        foreach ($dados as $items) {
            $sql = "call spInsertPedido(?, ?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $Nf);
            $stmt->bindValue(2, $codForne);
            $stmt->bindValue(3, $items['ValorUnitario']);
            $stmt->bindValue(4, $items['CodigoBarras']);
            $stmt->bindValue(5, $items['Quantidade']);
            $stmt->execute();
        }
    }
}
