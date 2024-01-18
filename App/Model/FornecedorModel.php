<?php

namespace App\Model;
use App\DAO\FornecedorDAO;

class FornecedorModel extends Model
{
    public $Codigo, $Cnpj, $Nome, $Telefone;

    public function cadastrofoner()
    {
        $dao = new FornecedorDAO;
        $dao->insertForne($this->Cnpj, $this->Nome, $this->Telefone);
    }

    public function listaForne()
    {
        $dao = new FornecedorDAO();
        $this->rows = $dao->selectForne();
    }
}