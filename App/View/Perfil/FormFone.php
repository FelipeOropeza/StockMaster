<h2>Cadastro de Fornecedores</h2>
<br>
<form style="max-width: 400px; margin: auto;" action="<?php echo url('perfil', 'index/save'); ?>?arq=FormFone" method="post">
  <div class="mb-3">
    <label for="Nome" class="form-label">Cnpj</label>
    <input type="number" class="form-control" id="cnpj" name="cnpj">
  </div>
  <div class="mb-3">
    <label for="Email" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome">
  </div>
  <div class="mb-3">
    <label for="Senha" class="form-label">Telefone</label>
    <input type="tel" class="form-control" id="telefone" name="telefone">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>