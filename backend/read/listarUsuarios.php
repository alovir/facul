<?php
  include(dirname(__DIR__).'/db.php');

  if(isset($_GET['privilegio'])) $privilegio = $_GET['privilegio'];

  if($privilegio == 'funcionario') {
    // Apenas os clientes
    $sql = "SELECT * FROM usuarios 
    WHERE id_usuario > 1 
    AND funcionario = 0";
  } else {
    //Todos os usuarios 
    $sql = "SELECT * FROM usuarios WHERE id_usuario > 1";
  }
    //evitar o 1 item porque é o próprio admin por isso WHERE id_usuario > 1  

  $result = dbQuery($sql);
?>

<div class="table-responsive">
  <table class="table table-striped">
    <tr>
      <th>NOME</th>  
      <th>SOBRENOME</th>
      <th>CPF</th>  
      <th>EMAIL</th>
      <th id="th-funcionario">FUNCIONARIO</th>
      <th>AÇÃO</th>
    </tr>
<?php
  while($row = dbFetchAssoc($result)){ 
        $usuarioStr = array(
          $row['id_usuario'],      
          $row['nome'],      
          $row['sobrenome'], 
          $row['cpf'], 
          $row['email'],     
          $row['senha'],  
          $row['funcionario'],  
          $privilegio  
        );

      $usuarioStr = implode(",", $usuarioStr);
      ?>
    <tr id="tabela-usuarios">
      <td><?php echo $row['nome']       ?></td>
      <td><?php echo $row['sobrenome']  ?></td>
      <td><?php echo $row['cpf']        ?></td>
      <td><?php echo $row['email']      ?></td>
      <td id="td-funcionario">
        <input  class="form-check-input"type="checkbox" disabled 
        <?php if($row['funcionario'] == 1) echo 'checked';?>> 
      </td>
      <td class="d-flex justify-content-around">
        <button data-bs-toggle="modal" data-bs-target="#modalEditarUsuario" 
          class="btn btn-secondary btn-sm" 
          onclick="modalEditarUsuario('<?php echo $usuarioStr;?>')">Editar</button>
          <a class="btn btn-danger btn-sm" href="<?php echo 'backend/delete/deletarUsuario.php?id_usuario='.$row['id_usuario']. '&privilegio='.$privilegio;?>">Deletar</a>
      </td>
     </tr>
<?php  }?> <!-- fechando while-->
 </table>
</div> <!--responsive table -->
