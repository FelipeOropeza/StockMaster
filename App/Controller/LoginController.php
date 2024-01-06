<?php 

namespace App\Controller;
use App\Model\LoginModel;

class LoginController extends Controller
{
    public static function login()
    {
        if(empty($_POST["email"]) || empty($_POST["senha"])) {
            parent::reader('Login');
        }else{
            $model = new LoginModel();
            $model->Email = $_POST['email'];
            $model->Senha = $_POST['senha'];

            $result = $model->autenticar(); 

            session_start();
            $_SESSION['id'] = $result->Id_Login;
            $_SESSION['nome'] = $result->Nome;
            $_SESSION['email'] = $result->Email;
            $_SESSION['senha'] = $result->Senha;
            $_SESSION['acesso'] = $result->Acesso;

            header('Location: /StockMaster/App/home');
        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header('Location: /StockMaster/App/');
    }
}