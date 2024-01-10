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
        $model->listaProduto();

        parent::reader('Home/Home', 0, $model);
    }
}
