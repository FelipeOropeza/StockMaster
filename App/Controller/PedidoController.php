<?php

namespace App\Controller;

use App\Services\Session;

class PedidoController extends Controller
{
    public static function finalizar()
    {   
        Session::start();
        parent::authentic();
        
        echo $_POST['forn'];
        var_dump($_SESSION['carrinho']);
    }
}