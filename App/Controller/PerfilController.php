<?php

namespace App\Controller;

use App\Model\LoginModel;
use App\Model\RelatorioModel;
use App\Services\Hash;
use App\Services\Session;

class PerfilController extends Controller
{

    public static function index()
    {
        Session::start();
        parent::authentic();

        $acesso = $_SESSION['acesso'];
        $id = $_SESSION['id'];

        if (empty($_GET['arq'])) {
            $model = new LoginModel();
            $model->Id_Login = $id;
            $model = $model->getById();
            parent::reader('Perfil/Perfil', 0, $model, ['acesso' => $acesso]);
        } else {
            $model = new RelatorioModel();
            $model->listaRela();
            $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
            parent::reader('Perfil/Perfil', 0, null, ['funcao' => $funcao, 'acesso' => $acesso]);
        }
    }

    public static function save()
    {
        switch ($_GET['arq']) {
            case 'FormFunc':
                $model = new LoginModel();
                $model->Nome = $_POST['nome'];
                $model->Email = $_POST['email'];
                $model->Senha = Hash::criptografaPassword($_POST['senha']);
                $model->Acesso = 0;
                $model->cadastroLogin();
                break;

            case 'FormFone':
                var_dump($_POST);
                break;
        }


        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }
}
