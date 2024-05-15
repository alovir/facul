
<!-- modal editar usuario-->
<div class="modal" id="modalEditarUsuario" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3" id="editarFuncionarioStatus">
          <label for="inputFuncionarioStatus">Funcionario:</label>
          <input type="checkbox" class="form-check-input" id="inputFuncionarioStatus">
        </div>

        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="inputNomeUsuario">

        <label for="editarSobrenomeUsuario">Sobrenome:</label>
        <input type="text" class="form-control" id="inputSobrenomeUsuario" name="sobrenome">

        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" id="inputCpfUsuario" name="cpf">

        <label for="email">Email:</label>
        <input type="text" class="form-control" id="inputEmailUsuario" name="email">

        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="inputSenhaUsuario" name="senha">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" 
        data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="btnSalvarUsuario" 
        data-bs-dismiss="modal" onclick="salvarUsuario()">Salvar</a>
      </div>
    </div>
  </div>
</div>


