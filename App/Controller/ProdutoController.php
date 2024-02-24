<?php

namespace App\Controller;

use App\Model\ProdutoModel;
use App\Services\Session;

class ProdutoController extends Controller
{
    public static function detalhes()
    {
        Session::start();
        parent::authentic();
        
        $model = new ProdutoModel();
        $model = $model->getById($_GET['cd']);

        parent::reader('Produto/Detalhes', 0, $model);
    }

    public static function save()
    {
        $model = new ProdutoModel();
        $model->CodigoBarras = $_POST['codigo_barras'];
        $model->Nome = $_POST['nome'];
        $model->ValorUnitario = $_POST['preco'];
        $model->Qtd = $_POST['quantidade'];
        $model->cadastroProd();
        var_dump($_POST);
    }

    public static function addCarrinho()
    {
        var_dump($_POST['valor']);
    }
}
