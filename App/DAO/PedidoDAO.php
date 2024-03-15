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
        $_SESSION['NF'] = rand(1, 1000);
        foreach ($dados as $items) {
            $sql = "call spInsertPedido(?, ?, ?, ?, ?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $_SESSION['NF']);
            $stmt->bindValue(2, $codForne);
            $stmt->bindValue(3, $items['ValorUnitario']);
            $stmt->bindValue(4, $items['CodigoBarras']);
            $stmt->bindValue(5, $items['Quantidade']);
            $stmt->execute();
        }
    }

    public function selectViewPed($Nf)
    {
        $sql = "SELECT * FROM vwPedidoPdf WHERE NotaFiscal = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Nf);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
