/*variaveis globais  usuario*/
let idUsuarioSelecionado

/* inputs do modal editar usuario*/
let inputFuncionarioStatus = document.getElementById('inputFuncionarioStatus')
let inputNomeUsuario = document.getElementById('inputNomeUsuario')
let inputSobrenomeUsuario = document.getElementById('inputSobrenomeUsuario')
let inputCpfUsuario = document.getElementById('inputCpfUsuario')
let inputEmailUsuario = document.getElementById('inputEmailUsuario')
let inputSenhaUsuario = document.getElementById('inputSenhaUsuario')

function modalEditarUsuario(usuario){
  usuario = usuario.split(',')
  //coloca os valores atuais do usuario nas variaveis globais 
  idUsuarioSelecionado = usuario[0];
  nomeUsuarioSelecionado = usuario[1]
  sobrenomeUarioSelecionado = usuario[2]  
  cpfUsuarioSelecionado = usuario[3]    
  emailUsuarioSelecionado = usuario[4]
  senhaUsuarioSelecionado  = usuario[5]
  funcionarioStatus = usuario[6]
  privilegio = usuario[7]



  //coloca os valores atuais do usuario nos inputs do modal
  inputNomeUsuario.value = nomeUsuarioSelecionado
  inputSobrenomeUsuario.value = sobrenomeUarioSelecionado
  inputCpfUsuario.value = cpfUsuarioSelecionado
  inputEmailUsuario.value = emailUsuarioSelecionado
  inputSenhaUsuario.value = senhaUsuarioSelecionado

  if(funcionarioStatus == "1"){
    inputFuncionarioStatus.checked = true;
  } else {
    inputFuncionarioStatus.checked = false;
  }



}
function salvarUsuario(){
let novoFuncionarioStatus 
/*precisa converter para 0 ou 1*/
inputFuncionarioStatus.checked ? novoFuncionarioStatus = "1" : novoFuncionarioStatus= "0"

let novoNome = inputNomeUsuario.value
let novoSobreNome = inputSobrenomeUsuario.value
let novoCpf = inputCpfUsuario.value
let novoEmail = inputEmailUsuario.value
let novaSenha = inputSenhaUsuario.value

let url = baseUrl + 'editarUsuario.php?id_usuario=' + idUsuarioSelecionado 
   + '&nome='+ novoNome 
   + '&sobrenome=' + novoSobreNome 
   + '&cpf=' + novoCpf
   + '&email=' + novoEmail
   + '&senha=' + novaSenha
   + '&funcionario=' + novoFuncionarioStatus
   + '&privilegio=' + privilegio

window.location = url 
}

