<?php

namespace App\Model;
use App\DAO\LoginDAO;

class LoginModel
{
    public $Id_Login, $Nome, $Email, $Senha, $Acesso;

    public function autenticar()
    {
        $dao = new LoginDAO();

        $obj = $dao->selecLogin($this->Email, $this->Senha);

        return ($obj) ? $obj : new LoginModel;
    }
}