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
        Session::start();
        parent::authentic();
        
        $model = new ProdutoModel();
        $model->CodigoBarras = $_POST['codigo_barras'];
        $model->Nome = $_POST['nome'];
        $model->ValorUnitario = $_POST['preco'];
        $model->Qtd = $_POST['quantidade'];
        $model->cadastroProd();

        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }

    public static function update()
    {
        Session::start();
        parent::authentic();
        parent::adminfunc();

        $model = new ProdutoModel();
        $model->CodigoBarras = $_POST['codigo_barras'];
        $model->Nome = $_POST['nome'];
        $model->ValorUnitario = $_POST['preco'];
        $model->atulizarProd();

        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }

    public static function delete()
    {
        Session::start();
        parent::authentic();
        parent::adminfunc();

        $model = new ProdutoModel();
        $model->CodigoBarras = $_GET['cd'];
        $model->excluirProd();

        header('Location: /StockMaster/App/perfil/index?arq=' . $_GET['arq']);
    }
}
