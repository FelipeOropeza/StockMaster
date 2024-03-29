<h2>Relatorios</h2>
<br>
<div class="table-responsive">
    <?php if ($model->rows != []) { ?>
        <table class="table table-bordered">
            <tr>
                <th>Titulo</th>
                <th>Mensagem</th>
                <th>Data</th>
            </tr>
            <?php foreach ($model->rows as $items) : ?>
                <tr>
                    <td><?= $items->Titulo ?></td>
                    <td><?php echo mb_strimwidth($items->Mensagem, 0, 80, '...'); ?></td>
                    <td><?php echo date("d/m/Y", strtotime($items->Data_rela)) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php } else { ?>
        <h3>Nenhum relatorio no momento</h3>
    <?php } ?>
</div>