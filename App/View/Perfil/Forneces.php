<h2>Fornecedores</h2>
<br>
<div class="table-responsive">
    <?php if ($model->rows != []) { ?>

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
    <?php } else { ?>
        <h3>Nenhum fornecedor no momento</h3>
    <?php } ?>
</div>