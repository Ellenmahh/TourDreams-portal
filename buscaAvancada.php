<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tour Dreams</title>
    	<link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="fontes/fonte.css" rel="stylesheet">
      <script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
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
      <script type="text/javascript">
          $(document).ready(function(){
            $("#mostrar").click(function(event){
              event.preventDefault();
              $("#filtros").slideToggle(500);


            });

          });
      </script>
	  
      <!--<script type="text/javascript">
        $(document).ready(function(){
          $("#filtrar").click(function(event){
            event.preventDefault();
            $(".labels").slideToggle(300);
          });
        });
      </script>-->
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
        <div id="area_pesquisa">
          <input id="input_busca_avancada" placeholder="Faça uma busca..." type="text" name="" value="">

          <button id="btn_pesquisa_avancada" type="button" name="button" >
            <a href="#" id="mostrar"><img id="img_filtro" src="imagens/filtro.png" alt="dasd"></a></button>
        </div>
        <div id="filtros">
          <!--<button>
            <a href="#" id="filtrar">OPÇÕES DE FILTROS</a></button>-->
          <div id="labels">
            <input type="checkbox" id="checkbox1" name="" value="">
            <label class="labels" for="checkbox1"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox2" name="" value="">
            <label class="labels"for="checkbox2"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox3" name="" value="">
            <label class="labels"for="checkbox3"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox4" name="" value="">
            <label class="labels"for="checkbox4"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox5" name="" value="">
            <label class="labels"for="checkbox5"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox6" name="" value="">
            <label class="labels"for="checkbox6"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox7" name="" value="">
            <label class="labels"for="checkbox7"></label>
            <p>TESTE</p>
            <input type="checkbox" id="checkbox8" name="" value="">
            <label class="labels"for="checkbox8"></label>
            <p>TESTE</p>
          </div>

        </div>
        <div id="txt_busca_avancada">
          <p>ALGUMAS SUGESTÕES</p>
        </div>
        <div id="principal_produtos">
          <div class="produtos_div">
            <img src="imagens/hotel1.jpg" alt="">
            <div class="legenda_produto">
              <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
              <p class="txt_estado_hotel">São Paulo</p>
              <img src="imagens/wifi.png" alt="">
              <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
              <p class="txt_diaria_hotel" >Diárias a partir de</p>
              <p class="txt_rs" >R$</p>
              <p class="txt_preco_hotel">200</p>
              <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

            </div>

          </div>
            <div class="produtos_div">
              <img src="imagens/hotel2.jpg" alt="">
              <div class="legenda_produto">
                <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                <p class="txt_estado_hotel">São Paulo</p>
                <img src="imagens/wifi.png" alt="">
                <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

              </div>


            </div>
              <div class="produtos_div">
                <img src="imagens/hotel3.jpg" alt="">
                <div class="legenda_produto">
                  <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                  <p class="txt_estado_hotel">São Paulo</p>
                  <img src="imagens/wifi.png" alt="">
                  <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                  <p class="txt_diaria_hotel" >Diárias a partir de</p>
                  <p class="txt_rs" >R$</p>
                  <p class="txt_preco_hotel">200</p>
                  <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

                </div>

              </div>
              <div class="produtos_div">
                <img src="imagens/hotel4.jpg" alt="">
                <div class="legenda_produto">
                  <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                  <p class="txt_estado_hotel">São Paulo</p>
                  <img src="imagens/wifi.png" alt="">
                  <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                  <p class="txt_diaria_hotel" >Diárias a partir de</p>
                  <p class="txt_rs" >R$</p>
                  <p class="txt_preco_hotel">200</p>
                  <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

                </div>

              </div>
              <div class="produtos_div">
                <img src="imagens/hotel3.jpg" alt="">
                <div class="legenda_produto">
                  <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                  <p class="txt_estado_hotel">São Paulo</p>
                  <img src="imagens/wifi.png" alt="">
                  <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                  <p class="txt_diaria_hotel" >Diárias a partir de</p>
                  <p class="txt_rs" >R$</p>
                  <p class="txt_preco_hotel">200</p>
                  <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

                </div>

              </div>
              <div class="produtos_div">
                <img src="imagens/hotel4.jpg" alt="">
                <div class="legenda_produto">
                  <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                  <p class="txt_estado_hotel">São Paulo</p>
                  <img src="imagens/wifi.png" alt="">
                  <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                  <p class="txt_diaria_hotel" >Diárias a partir de</p>
                  <p class="txt_rs" >R$</p>
                  <p class="txt_preco_hotel">200</p>
                  <input type="submit" name="btn_produto" value="Reservar" class="btn_produto">

                </div>

              </div>
      </div>
    </section>
    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
