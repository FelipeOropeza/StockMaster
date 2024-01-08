<?php

namespace App\Controller;

use App\Model\LoginModel;
use App\Services\Session;
use App\Services\Hash;

class LoginController extends Controller
{
    public static function login()
    {
        if (empty($_POST["email"]) || empty($_POST["senha"])) {
            parent::reader('Login/Login', 1);
        } else {
            $model = new LoginModel();
            $model->Email = $_POST['email'];

            $senha = $_POST['senha'];

            $result = $model->autenticar();
            if ($result && Hash::verificaPassword($senha, $result->Senha)) {
                Session::criarSession($result);
                header('Location: /StockMaster/App/home/index');
            } else {
                echo 'senha invalida';
            }
        }
    }

    public static function logout()
    {
        Session::destroy();
        header('Location: /StockMaster/App/');
    }
}
