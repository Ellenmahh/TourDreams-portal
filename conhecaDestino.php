<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tour Dreams</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="fontes/fonte.css" rel="stylesheet">
      <script src="js/jquery-3.2.1.min.js"></script>
      </script>
      <script type="text/javascript">

      $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
          $('header').addClass("sticky");
        }
        else{
          $('header').removeClass("sticky");
        }
        });

      </script>
      <?php
        include('tradutor.php');
       ?>
  </head>
  <body>
    <header>
      <?php include('menu.php'); ?>
    </header>
    <section>
      <div id="principal">
        <div id="txt_parceiros">
          <p>PESQUISE SOBRE SEU DESTINO</p>
        </div>
        <div id="area_pesquisa">
          <input id="input_busca_avancada" placeholder="Ex: Vargem Grande" type="text" name="" value="">
          <button id="btn_buscar_conhecaDestino" type="button" name="button" ><img  src="imagens/img_btn3.png" alt=""></button>
        </div>
        <div class="area_comentario">
            <img class="img_hotel_conhecaDestino" src="imagens/hotel5.jpg" alt="">
            <img class="img_usuario_conhecaDestino" src="imagens/harry.jpg" alt="">
            <p class="txt_nome_conhecaDestino" >Andrey Alves</p>
            <p class="txt_comentario_conhecaDestino">teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste</p>
        </div>

        <div class="area_comentario">
            <img class="img_hotel_conhecaDestino" src="imagens/hotel2.jpg" alt="">
            <img class="img_usuario_conhecaDestino" src="imagens/harry.jpg" alt="">
            <p class="txt_nome_conhecaDestino" >Andrey Alves</p>
            <p class="txt_comentario_conhecaDestino">teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste</p>
        </div>

        <div class="area_comentario">
            <img class="img_hotel_conhecaDestino" src="imagens/hotel3.jpg" alt="">
            <img class="img_usuario_conhecaDestino" src="imagens/harry.jpg" alt="">
            <p class="txt_nome_conhecaDestino" >Andrey Alves</p>
            <p class="txt_comentario_conhecaDestino">teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste</p>
        </div>

        <div class="area_comentario">
            <img class="img_hotel_conhecaDestino" src="imagens/hotel4.jpg" alt="">
            <img class="img_usuario_conhecaDestino" src="imagens/harry.jpg" alt="">
            <p class="txt_nome_conhecaDestino" >Andrey Alves</p>
            <p class="txt_comentario_conhecaDestino">teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste teste
              teste teste teste teste teste teste teste</p>
        </div>

      </div>
    </section>
    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
