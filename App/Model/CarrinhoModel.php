<?php

namespace App\Model;

class CarrinhoModel extends Model
{
    public function addItem($qtd, $cod)
    {
        if (empty($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [['Quantidade' => $qtd, 'CodigoBarras' => $cod]];
        } else {
            array_push($_SESSION['carrinho'], ['Quantidade' => $qtd, 'CodigoBarras' => $cod]);
        }
    }

    public function deleteItem($pos)
    {
        unset($_SESSION['carrinho'][$pos]);
    }
}
