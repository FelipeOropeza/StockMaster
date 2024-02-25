<?php

namespace App\Controller;

use App\Services\Session;

class CarrinhoController extends Controller
{
    public static function index()
    {
        Session::start();
        parent::authentic();

        if (!empty($_SESSION['carrinho'])) {
            $carrinho = $_SESSION['carrinho'];
            var_dump($carrinho);
        }

        parent::reader('Carrinho/Index');
    }

    public static function addCarrinho()
    {
        Session::start();
        if (empty($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }

        array_push($_SESSION['carrinho'], $_POST['valor'], $_GET['cd']);
        header('Location: /StockMaster/App/carrinho/index');
    }
}
