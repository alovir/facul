<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
    include_once './parts/header.php';
    include_once './parts/modalEditarUsuario.php';
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
$privilegio = 'administrador';
?>

<p><strong>ADMINISTRADOR</strong> - GERENCIAR </p>
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  <li class="nav-item " role="presentation">
    <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">USUARIOS</button>

  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">MONITORAMENTO</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">HISTORICO</button>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <?php require_once 'backend/read/listarUsuarios.php';?>
  </div>
  <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <?php require_once 'monit.php';?>
  </div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <?php require_once 'esp/relatorio.php';?>
  </div>
</div>

    <!----FIM DO CONTEUDO ---->

    <!----INICIO DO RODAPE ---->
   
    <!---FIM DO RODAPE --->
    </main>
   
</body>
</html>


