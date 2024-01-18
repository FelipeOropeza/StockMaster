<h2>Fornecedores</h2>
<br>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Cnpj</th>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        <?php foreach ($model->rows as $items) : ?>
        <tr>
            <td><?= $items->Cnpj ?></td>
            <td><?= $items->Nome ?></td>
            <td><?= $items->Telefone ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>