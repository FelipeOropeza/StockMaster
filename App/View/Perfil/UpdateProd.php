<h2>Atualizar Produto</h2>

<form style="max-width: 400px; margin: auto;" action="<?php echo url('produto', 'update'); ?>?arq=Prods" method="post">
    <label for="codigo_barras">Código de Barras:</label>
    <input type="number" value="<?= $model->CodigoBarras ?>" id="codigo_barras" name="codigo_barras"><br>

    <label for="nome">Nome do Produto:</label>
    <input type="text" value="<?= $model->Nome ?>" id="nome" name="nome"><br>

    <label for="preco">Preço:</label>
    <input type="number" value="<?= $model->ValorUnitario ?>" id="preco" name="preco" step="0.01"><br>

    <label for="quantidade">Quantidade em Estoque:</label>
    <input type="number" value="<?= $model->Qtd ?>" id="quantidade" name="quantidade"><br>
    <br>
    <button type="submit">Atualizar Produto</button>
</form>