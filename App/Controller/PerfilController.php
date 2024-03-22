<?php

namespace App\Controller;

use App\Model\FornecedorModel;
use App\Model\LoginModel;
use App\Model\RelatorioModel;
use App\Model\ProdutoModel;
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
                    parent::adminfunc();
                    $model = new RelatorioModel();
                    $model->listaRela();
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
                    break;

                case 'Forneces':
                    $model = new FornecedorModel();
                    $model->listaForne();
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso]);
                    break;

                case 'Prods':
                    $model = new ProdutoModel();

                    if(isset($_GET['pagina'])) {
                        $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
                    }
                    if(empty($_GET['pagina'])){
                        $pagina = 1;
                    }

                    $limite = 4;
                    $inicio = ($pagina * $limite) - $limite;


                    $model->listaProduto($inicio, $limite);
                    $registros = $model->contProd();

                    $paginas = ceil($registros['COUNT'] / $limite);

                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], $model, ['acesso' => $acesso,
                    'pagina' => $pagina, 'paginas' => $paginas]);
                    break;

                case 'FormFunc':
                    parent::adminfunc();
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                case 'FormForne':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                case 'FormRela':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;

                case 'FormProd':
                    $funcao = parent::funcoes('Perfil/' . $_GET['arq'], null, ['acesso' => $acesso]);
                    break;
                
                case 'UpdateProd':
                    parent::adminfunc();
                    $model = new ProdutoModel;
                    $model = $model->getById($_GET['cd']);
                    $funcao = parent::funcoes('Perfil/'. $_GET['arq'], $model, ['acesso' => $acesso]);
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
        Session::start();
        parent::authentic();
        
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
