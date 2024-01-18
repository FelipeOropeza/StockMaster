<?php
if ($acesso != 0) {
    header('Location: /StockMaster/App/perfil/index');
}
?>
<h2>Relatorio</h2>

<form style="max-width: 400px; margin: auto;" action="<?php echo url('relatorio', 'enviar') ?>?arq=FormRela" method="post">

    <label for="titulo">Título do Relatório:</label>
    <input type="text" id="titulo" name="titulo">

    <label for="textp">Mensagem:</label>
    <textarea id="texto" name="texto"></textarea>

    <button type="submit">Enviar Relatório</button>

</form>