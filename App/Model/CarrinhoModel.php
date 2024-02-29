<?php

namespace App\Model;

class CarrinhoModel extends Model
{
    public $CodBarras, $Nome,  $Valor, $Qtd, $ValorTotal;

    public function addItem()
    {
        if (empty($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [['Nome' => $this->Nome, 'Quantidade' => $this->Qtd, 'CodigoBarras' => $this->CodBarras,
            'ValorUnitario' => $this->Valor, 'ValorTotal' => $this->ValorTotal]];
        } else {
            array_push($_SESSION['carrinho'], ['Nome' => $this->Nome, 'Quantidade' => $this->Qtd, 'CodigoBarras' => $this->CodBarras,
            'ValorUnitario' => $this->Valor, 'ValorTotal' => $this->ValorTotal]);
        }
    }

    public function deleteItem($pos)
    {
        unset($_SESSION['carrinho'][$pos]);
    }
}
