<?php
  include(dirname(__DIR__).'/db.php');

  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $email = $_POST["email"];  
  $cpf = $_POST["cpf"];
  $senha = $_POST["senha"]; 
  /* antes de cadastra um usuário é necessário se já existe  um cadastro com o mesmo email*/
  $sql = "SELECT email FROM usuarios WHERE email='$email'"; /* query para buscar o email
*/
  $result = dbQuery($sql); /* coloca o resultado da busca na variável $result*/
  $row = dbFetchAssoc($result); /* coloca o rusuldato da consulta em um array associativo 
  assim podemos acessar  $row['CAMPO-DA-TABELA']
  referências:
  https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc.php
  artigo:
  https://www.devmedia.com.br/php-declaracao-e-atribuicao-de-arrays-em-php/38621
  */

  if ($row['email'] === $email) {
    /*
    se o email for encontrado no banco de dados ( $row['email']) for exatamente igual ao email ( que o usuario digitou no campo de cadastro) ,redireciona para a pagina de cadastro de usuario 
    termina a execução desse script, porque não pode cadastrar mais de um usuario por email. 
    */
    header("location: /tcc/cadastrarUsuario.php"); /*redireciona para a pagina de cadastro de usuario*/ 
    die(); /* interrompe o script , qualque código abaixo não será executado*/
  } else {  /* se não encontrou um usuario com o email já cadastrado, insere o novo usuario na tabela
  usuarios*/
    $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, email, senha) VALUES ('$nome', '$sobrenome', '$cpf', '$email', '$senha' )";
     dbQuery($sql);  

    header("location: /tcc/login.php"); /* redireciona para a página de login*/
    die();
  }
?>
