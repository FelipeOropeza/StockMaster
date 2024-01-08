<title>Home</title>

<br>
<div class="container-fluid">
    <div class="row">
        <?php foreach ($model->rows as $items) : ?>
            <div class="col-sm-3">
                <div>
                    <h5><b><?= $items->Nome ?></b></h5>
                </div>
                <div><svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="37%" y="50%" fill="#aaa" dy=".3em">250x250</text>
                    </svg></div>
                <div>
                    <h5>Preço: R$ <?php echo number_format($items->ValorUnitario, 2, ',', '.'); ?></h5>
                </div>
                <div>
                    <h5>Quantidade: <?= $items->Qtd ?></h5>
                </div>
                <div class="text" style="margin-top:5px; margin-bottom:5px;">
                    <a class="btn btn-xl btn-block btn-primary" href="<?php echo url('produto', 'detalhes'); ?>?cd=<?= $items->CodigoBarras ?>" role="button">Detalhes</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>