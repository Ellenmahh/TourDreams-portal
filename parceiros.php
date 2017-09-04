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
          <p>NOSSOS PARCEIROS</p>
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/logo.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel1.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel2.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel3.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel4.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel5.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel6.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel7.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
        <div class="area_parceiro">
          <img class="img_logo_parceiro" src="imagens/hotel8.jpg" alt="">
          <img class="img_icone_local" src="imagens/localizacao.png" alt="">
          <p class="txt_local_parceiro" >São Paulo</p>
          <p class="txt_nome_parceiro">Hotel Fazende</p>
          <input type="submit" name="btn_produto" value="ver" class="btn_ver_parceiro">
        </div>
      </div>
    </section>
    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
