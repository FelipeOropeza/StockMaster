<?php 

namespace App\Controller;
use App\Model\LoginModel;
use App\Services\Session;

class LoginController extends Controller
{
    public static function login()
    {
        if(empty($_POST["email"]) || empty($_POST["senha"])) {
            parent::reader('Login', 1);
        }else{
            $model = new LoginModel();
            $model->Email = $_POST['email'];
            $model->Senha = $_POST['senha'];

            $result = $model->autenticar();
            Session::criarSession($result);

            header('Location: /StockMaster/App/home');
        }
    }

    public static function logout()
    {   
        Session::destroy();
        header('Location: /StockMaster/App/');
    }
}