let privilegio
const baseUrl = "/tcc/backend/update/"

/*fechar mensagens */
const msgs = document.querySelector(".msg")

function fecharMsgs(){
  msgs.remove()
  alert('fechar')
}
/* validação*/
function validateCadastroUserForm() {   

let formNome = document.forms["formCadastroUsuario"]["nome"].value   
let formSobrenome = document.forms["formCadastroUsuario"]["sobrenome"].value   
let formCpf = document.forms["formCadastroUsuario"]["cpf"].value 
let formEmail = document.forms["formCadastroUsuario"]["email"].value   
let formSenha = document.forms["formCadastroUsuario"]["senha"].value   


  if (formNome == "" ) {     
    alert("Campo de nome obrigatório");     
    return false;   
   }
   if (formSobrenome == "" ) {     
    alert("Campo de Sobrenome obrigatório");     
    return false;   
   }
   if (formCpf == "" ) {     
    alert("Campo de Cpf obrigatório");     
    return false;   
   }
   if (formEmail == "" ) {     
    alert("Campo de email obrigatório");     
    return false;   
   } 
 
   if (formSenha== "" ) {     
    alert("Campo de senha obrigatório");     
    return false;   
   }
}
function formatCpf(event){
  let inputCpf = document.forms["formCadastroUsuario"]["cpf"]
  let arr = document.forms["formCadastroUsuario"]["cpf"].value.split('') // transforma o valor do input em um array

  const theEvent = event || window.event  // 
  const regex = /[0-9]|\./
  let key = theEvent.keyCode || theEvent.which
  key = String.fromCharCode(key)

  if( !regex.test(key) ) {
    /* caso o valor digitado no campo do cpf NÃO seja um valor entre 0 e 1
    o carectere não será inserido no input
    */
   theEvent.returnValue = false
   if(theEvent.preventDefault) theEvent.preventDefault()
  }

  /* coloca o cpf 12345645  no formato 123.456.789-18*/
  if(arr.length == 3 ) arr.splice(3, 0, '.') // adiciona o '.' após o terceiro caractere 
  if(arr.length == 8) arr.splice(7, 0, '.')// adiciona o '.' após o sétimo caractere 
  if(arr.length == 11) arr.splice(11, 0, '-')// adiciona o '-' após o décimo primeiro caractere 

  inputCpf.value = arr.join('') // retorna a nova string
}




