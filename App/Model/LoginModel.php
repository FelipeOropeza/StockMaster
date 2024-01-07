<?php

namespace App\Model;
use App\DAO\LoginDAO;

class LoginModel
{
    public $Id_Login, $Nome, $Email, $Senha, $Acesso;

    public function autenticar()
    {
        $dao = new LoginDAO();

        $obj = $dao->selecLogin($this->Email);

        return ($obj) ? $obj : new LoginModel;
    }

    public function cadastroLogin()
    {
        $dao = new LoginDAO();

        $obj = $dao->selecLogin($this->Email);
        if($obj == ''){
            $dao->insertLogin($this->Nome, $this->Email, $this->Senha, $this->Acesso);
        }
    }
}