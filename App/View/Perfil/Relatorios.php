<h2>Relatorio</h2>
<?php foreach ($model->rows as $items) : ?>
<h2><?= $items->Titulo ?></h2>
<h2><?= $items->Mensagem ?></h2>
<h2><?= $items->Data_rela ?></h2>
<?php endforeach; ?>