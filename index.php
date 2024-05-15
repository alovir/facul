<!DOCTYPE html>
<html lang="pt-br">
<head>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const showTimeNow = () => {
    const clockTag = document.getElementById('customClock');
    let dateNow = new Date();
    let hh = dateNow.getHours();
    let mm = dateNow.getMinutes();
    let ss = dateNow.getSeconds();
    hh = hh < 10 ? '0' + hh : hh;
    mm = mm < 10 ? '0' + mm : mm;
    ss = ss < 10 ? '0' + ss : ss;
    clockTag.innerText = hh + ':' + mm + ':' + ss;
  }



  
  showTimeNow();
  setInterval(showTimeNow, 1000);
});
</script>


<?php 
       include_once "./parts/header.php";
    ?>
</head>
<body class="custom-background">
    <main>
    
    <!--- MENU SUPERIOR --->
<?php include_once "./parts/menu.html" ?>

<!-- clock widget start -->
<div id="customClock" style="position: fixed; top: 10px; right: 10px; z-index: 1000; color: #ffffff; font-size: 18px;"></div>
<!-- clock widget end -->

    <!---FIM MENU SUPERIOR --->

    <!---CONTEUDO --->

   <!-- clock widget start -->
<div id="customClock" style="position: fixed; top: 10px; right: 10px; z-index: 1000;"></div>


<!-- clock widget end -->

<!-- clock widget start -->
<div id="customClock" style="position: fixed; top: 10px; right: 10px; z-index: 1000; color: #ffffff; font-size: 18px;"></div>
<!-- clock widget end -->

<!-- Adicione esta linha para o parágrafo -->
<p class="hoverable" style="text-align: center; font-size: 24px; margin-top: 150px;">Olá, bem-vindo ao sistema de monitoramento <br>
de ambiente da banco de dados</p>


    
    <!---FIM DO CONTEUDO --->

    <!---INICIO DO RODAPE --->
    <?php 
   include_once "./parts/footer.php"
    ?>
    <!---FIM DO RODAPE --->
    </main>
</body>
</html>