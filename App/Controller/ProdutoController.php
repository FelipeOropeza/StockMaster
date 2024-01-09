<?php

namespace App\Controller;

use App\Model\ProdutoModel;
use App\Services\Session;

class ProdutoController extends Controller
{
    public static function detalhes()
    {
        parent::authentic();
        Session::start();
        
        $model = new ProdutoModel();
        $model = $model->getById($_GET['cd']);

        parent::reader('Produto/Detalhes', 0, $model);
    }
}
