<?php

namespace App\Controller;

abstract class Controller
{
    protected static function reader($view, $dados = array(), $model = null)
    {
        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view)) 
        {
            extract($dados);
            include $arquivo_view;
        }
        else {
            exit('Arquivo da View não encontrado. Arquivo: ' . $arquivo_view);
        }
    }
}