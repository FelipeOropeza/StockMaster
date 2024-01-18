<?php

namespace App\Controller;

use App\Model\FornecedorModel;
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
            switch ($_GET['arq']) {
                case 'Relatorios':
                    $model = new RelatorioModel();
                    $model->listaRela();
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
                    break;

                case 'Forneces':
                    $model = new FornecedorModel();
                    $model->listaForne();
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
                    break;

                case 'FormFunc':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                case 'FormForne':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                case 'FormRela':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                default:
                    echo "Erro 404 - Página não encontrada";
                    exit();
            }
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

            case 'FormForne':
                $model = new FornecedorModel();
                $model->Cnpj = $_POST['cnpj'];
                $model->Nome = $_POST['nome'];
                $model->Telefone = $_POST['telefone'];
                $model->cadastrofoner();
                break;
        }


        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }
}
