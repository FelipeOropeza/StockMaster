<?php

namespace App\Controller;

use App\Services\Session;

class CarrinhoController extends Controller
{
    public static function index()
    {   
        Session::start();
        parent::authentic();

        parent::reader('Carrinho/Index');
    }
}