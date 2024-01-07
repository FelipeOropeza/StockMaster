<title>Home</title>

<?php foreach($model->rows as $items): ?>
    <h2><?= $items->CodigoBarras ?></h2>
    <h2><?= $items->Nome ?></h2>
    <h2><?= $items->ValorUnitario ?></h2>
    <h2><?= $items->Qtd ?></h2>
<?php endforeach; ?>
