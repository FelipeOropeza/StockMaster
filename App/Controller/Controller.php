<?php

namespace App\Controller;

abstract class Controller
{
    protected static function reader($view , $layout = 0, $dados = array(), $model = null)
    {
        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view) && $layout == 0)
        {
            extract($dados);
            include 'View/Estrutura/nav.php';
            include $arquivo_view;
            include 'View/Estrutura/rodape.php';
        }
        elseif(file_exists($arquivo_view) && $layout == 1)
        {
            extract($dados);
            include $arquivo_view;
        }
        else {
            exit('Arquivo da View não encontrado. Arquivo: ' . $arquivo_view);
        }
    }
}