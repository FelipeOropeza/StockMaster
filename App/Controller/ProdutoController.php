<?php 

namespace App\Controller;

use App\Services\Session;

class ProdutoController extends Controller
{
    public static function detalhes()
    {
        Session::start();
        parent::reader('Produto/Detalhes');
    }
}