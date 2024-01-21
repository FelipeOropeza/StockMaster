<title><?= $titulo_view ?></title>
<br>
<!-- <?= $model->CodigoBarras ?>
    <?= $model->Nome ?>
    <?= $model->ValorUnitario ?>
    <?= $model->Qtd ?> -->
<div class="container">
    <div class="left">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <h5><b><?= $model->Nome ?></b></h5>
                </div>
                <div>
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="250" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="37%" y="50%" fill="#aaa" dy=".3em">250x250</text>
                    </svg>
                </div>
                <div>
                    <h5>Preço: R$ <?php echo number_format($model->ValorUnitario, 2, ',', '.'); ?></h5>
                </div>
                <div>
                    <h5>Quantidade: <?= $model->Qtd ?></h5>
                </div>
                <div class="estoque">
                    <h4><b>Situação do estoque:</b></h4>
                    <?php if ($model->Qtd > 40) { ?>
                        <p class="text-success">Normal</p>
                    <?php } elseif ($model->Qtd <= 30 and $model->Qtd >= 20) { ?>
                        <p class="text-warning">Moderada</p>
                    <?php } else { ?>
                        <p class="text-danger">Esgotando</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <!-- Div na direita -->
        <div class="top">
            <!-- Div superior na direita -->
            Conteúdo da div superior na direita
        </div>
        <div class="bottom">
            <h4>Relatório sobre o produto</h4>
            <div class="relatorio">
                <form action="<?php echo url('relatorio', 'enviar'); ?>?cd=<?= $model->CodigoBarras; ?>" method="post" class="container">
                    <div class="form-section">
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="titulo">
                        <button type="submit">Enviar</button>
                    </div>
                    <div class="form-section">
                        <label for="texto">Texto:</label>
                        <textarea id="texto" name="texto"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>