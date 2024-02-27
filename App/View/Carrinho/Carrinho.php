<title><?= $titulo_view ?></title>

<?php if($carrinho != []) {?>

<table class="table table-bordered">
    <tr>
        <th>Posição</th>
        <th>Quantidade</th>
        <th>CodigoBarras</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($carrinho as $posicao => $item) : ?>
        <tr>
            <td><?= $posicao; ?></td>
            <td><?= $item['Quantidade']; ?></td>
            <td><?= $item['CodigoBarras']; ?></td>
            <td>
                <form method="post" action="<?php echo url('carrinho', 'delete'); ?>">
                    <input type="hidden" name="posicao" value="<?= $posicao; ?>">
                    <button type="submit">Remover</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php } ?>
