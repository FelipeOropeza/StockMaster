<?php

namespace App\Controller;

use App\Model\ProdutoModel;
use App\Services\Session;

class HomeController extends Controller
{
    public static function index()
    {
        Session::start();
        parent::authentic();

        $model = new ProdutoModel();

        $pagina = 1;
        $limite = 12;
        $inicio = ($pagina * $limite) - $limite;

        $model->listaProduto($inicio, $limite);

        parent::reader('Home/Home', 0, $model);
    }
}
