<?php

namespace App\Controller;

use App\Model\CarrinhoModel;
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

        parent::reader('Carrinho/Carrinho', 0 , null, ['carrinho' => $carrinho]);
    }

    public static function addCarrinho()
    {
        Session::start();
        $model = new CarrinhoModel();
        $model->addItem($_POST['valor'], $_GET['cd']);

        header('Location: /StockMaster/App/carrinho/index');
    }

    public static function delete()
    {
        Session::start();
        $posicao = $_POST['posicao'];
        unset($_SESSION['carrinho'][$posicao]);

        header('Location: /StockMaster/App/carrinho/index');

    }   
}
