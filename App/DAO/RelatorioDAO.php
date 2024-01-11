<?php

namespace App\DAO;

use App\Services\Session;
use \PDO;

class RelatorioDao extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertRela($titulo, $mensagem)
    {   
        Session::start();
        $sql = "call spInsertRela(?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $mensagem);
        $stmt->bindValue(3, $_SESSION['id']);
        $stmt->execute();
    }

    public function selectRela()
    {
        $sql = "SELECT * FROM tbl_relatorio";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}