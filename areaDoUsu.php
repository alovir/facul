<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
    include_once './parts/header.php';
    ?>
   
 
</head>
<body>
  <main>
    
    <!--- MENU SUPERIOR --->
   <div>
    <?php 
        include './parts/menuAdm.html'
    ?>
  </div>
    <!---FIM MENU SUPERIOR --->

    <!---CONTEUDO --->

    <?php 
    $nome_usuario = $_GET['nome_usuario'];
    $id_usuario = $_GET['id_usuario'];
    ?>    

<p> <strong> OLÁ USUARIO: <?php echo $nome_usuario ; ?>. </strong></p>
<ul class="nav nav-tabs" id="myTab" role="tablist">
 
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">MONITORAMENTO</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">HISTORICO</button>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  
  <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <?php require_once 'monit.php';?>
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <?php require_once 'esp/relatorio.php';?>
  </div>
</div>

    <!----FIM DO CONTEUDO ---->

    <!----INICIO DO RODAPE ---->
    <?php 
    include_once "./parts/footer.php";
    ?>
    <!---FIM DO RODAPE --->
    </main>
   
</body>
</html>


