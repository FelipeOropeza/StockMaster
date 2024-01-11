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
        
        if(empty($_GET['arq'])){
            parent::reader('Perfil/Perfil', 0, null, [ 'acesso' => $acesso]);
        } else{
            $model = new RelatorioModel();
            $model->listaRela();
            $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
            parent::reader('Perfil/Perfil', 0, null, ['funcao' => $funcao, 'acesso' => $acesso]);
        }

    }

    public static function save()
    {
        $model = new LoginModel();
        $model->Nome = $_POST['nome'];
        $model->Email = $_POST['email'];
        $model->Senha = Hash::criptografaPassword($_POST['senha']);
        $model->Acesso = 0;
        $model->cadastroLogin();

        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }
}