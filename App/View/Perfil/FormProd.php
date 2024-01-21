<h2>Cadastro de Produto</h2>

<form style="max-width: 400px; margin: auto;" action="<?php echo url('produto', 'save'); ?>?arq=FormProd" method="post">
    <label for="codigo_barras">Código de Barras:</label>
    <input type="number" id="codigo_barras" name="codigo_barras"><br>

    <label for="nome">Nome do Produto:</label>
    <input type="text" id="nome" name="nome"><br>

    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco" step="0.01"><br>

    <label for="quantidade">Quantidade em Estoque:</label>
    <input type="number" id="quantidade" name="quantidade"><br>
    <br>
    <button type="submit">Cadastrar Produto</button>
</form>