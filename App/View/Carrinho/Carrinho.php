<title><?= $titulo_view ?></title>

<div class='conteudo'>
    <?php if ($carrinho != []) { ?>
        <div class='carrinho'>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>Nome</th>
                        <th>CodigoBarras</th>
                        <th>Quantidade</th>
                        <th>ValorUnitario</th>
                        <th>ValorTotal</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($carrinho as $posicao => $item) : ?>
                        <tr>
                            <td><?= $item['Nome']; ?></td>
                            <td><?= $item['CodigoBarras']; ?></td>
                            <td><?= $item['Quantidade']; ?></td>
                            <td><?= $item['ValorUnitario']; ?></td>
                            <td><?= $item['ValorTotal']; ?></td>
                            <td>
                                <form method="post" action="<?php echo url('carrinho', 'delete'); ?>">
                                    <input type="hidden" name="posicao" value="<?= $posicao; ?>">
                                    <button type="submit">Remover</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
        <div class='resumo'>
            <h3>Resumo do Carrinho</h3>
            <br>
            <h4>Total do Carrinho: <br><?= $total ?></h4>
            <h4>Quantidade Total: <br><?= $totalQtd ?></h4>

        </div>
        <div class='button'>
            <form action="<?php echo url('pedido', 'finaliza'); ?>" method="post">
            <h4>Escolha um fornecedor</h4>
                <select id="forn" name="forn">
                    <option disabled>Fornecedores:</option>
                    <?php foreach ($model->rows as $items) : ?>
                        <option value="<?= $items->Cnpj ?>"><?= $items->Nome?></option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                <button type="submit">Finalizar Carrinho</button>
            </form>
        </div>
    <?php } else { ?>
        <h1>Sem produtos no carrinho</h1>
    <?php } ?>
</div>