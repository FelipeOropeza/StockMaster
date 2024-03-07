<?php

namespace App\Controller;

use App\Model\CarrinhoModel;
use App\Model\ProdutoModel;
use App\Services\Session;

class CarrinhoController extends Controller
{
    public static function index()
    {
        Session::start();
        parent::authentic();
        $carrinho = [];

        if (!empty($_SESSION['carrinho'])) {
            $carrinho = $_SESSION['carrinho'];
        }
        $total = array_sum (array_column($carrinho, 'ValorTotal') );
        $totalQtd = array_sum (array_column($carrinho, 'Quantidade') );

        parent::reader('Carrinho/Carrinho', 0 , null, ['carrinho' => $carrinho,
         'total' => $total, 'totalQtd' => $totalQtd ] );
    }

    public static function adicionar()
    {
        Session::start();
        $produto = new ProdutoModel();
        $produto = $produto->getById($_GET['cd']);

        $model = new CarrinhoModel();
        $model->Nome = $produto->Nome;
        $model->CodBarras = $_GET['cd'];
        $model->Qtd = $_POST['qtd'];
        $model->Valor = $produto->ValorUnitario;
        $model->ValorTotal = $produto->ValorUnitario * $_POST['qtd'];
        $model->addItem();

        header('Location: /StockMaster/App/carrinho/index');
    }

    public static function deletar()
    {
        Session::start();
        $model = new CarrinhoModel();
        $model->deleteItem($_POST['posicao']);

        header('Location: /StockMaster/App/carrinho/index');

    }   
}
