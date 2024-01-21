<h2>Produtos</h2>

<table class="table table-bordered">
    <tr>
        <th>Codigo Barras</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
    </tr>
    <?php foreach ($model->rows as $items) : ?>
    <tr>
        <td><?= $items->CodigoBarras ?></td>
        <td><?= $items->Nome ?></td>
        <td><?= $items->ValorUnitario ?></td>
        <td><?= $items->Qtd ?></td>
    </tr>
    <?php endforeach; ?>
</table>
