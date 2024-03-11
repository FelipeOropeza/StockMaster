<?php

namespace App\Controller;

use App\Model\PedidoModel;
use App\Services\Session;

class PedidoController extends Controller
{
    public static function finalizar()
    {   
        Session::start();
        parent::authentic();

        // if($_SESSION['carrinho'] == []){
        //     header('Location: /StockMaster/App/home/index');    
        // }
        
        $model = new PedidoModel;
        $model->pedido = $_SESSION['carrinho'];
        $model->cnpj = $_POST['forn'];
        $model->addPedido();

        $_SESSION['carrinho'] = [];

        parent::reader('pedido/Finalizar', 0, null);
    }
}