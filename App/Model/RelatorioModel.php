<?php

namespace App\Model;

use App\DAO\RelatorioDAO;

class RelatorioModel extends Model
{
    public $Id_rel, $Titulo, $Mensagem, $Data_rela, $Id_Login;

    public function inserir()
    {
        $dao = new RelatorioDAO();

        $dao->insertRela($this->Titulo, $this->Mensagem);
    }

    public function listaRela()
    {
        $dao = new RelatorioDAO();
        $this->rows = $dao->selectRela();
    }
}