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
    </head>
    <body>
      <header>
        <?php include('menu.php'); ?>
      </header>
      <section>
        <div id="principal">
          <div id="txt_parceiros">
            <p>VEJA NOSSAS PROMOÇÕES ATUAIS </p>
          </div>
          <div id="principal_promocao">

                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_promocao" value="Reservar" class="btn_promocao">

                  </div>

                </div>
                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_produto" value="Reservar" class="btn_promocao">

                  </div>

                </div>
                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_promocao" value="Reservar" class="btn_promocao">

                  </div>

                </div>
                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_promocao" value="Reservar" class="btn_promocao">

                  </div>

                </div>
                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_promocao" value="Reservar" class="btn_promocao">

                  </div>

                </div>
                <div class="promocao_div">
                  <img src="imagens/hotel3.jpg" alt="">
                  <div class="legenda_promocao">
                    <p class="txt_nome_hotel_promocao">Hotel Fazende Suipe</p>
                    <p class="txt_estado_hotel_promocao">São Paulo</p>
                    <img src="imagens/wifi.png" alt="">
                    <p class="txt_caracteristica_hotel_promocao">Wi-fi grátis</p>
                    <p class="txt_diaria_hotel_promocao" >Diárias a partir de</p>
                    <p class="txt_rs_promocao" >R$</p>
                    <p class="txt_preco_hotel_promocao">200</p>
                    <input type="submit" name="btn_produto" value="Reservar" class="btn_promocao">

                  </div>

                </div>


        </div>
      </section>
      <footer>
        <?php include('rodape.php'); ?>
      </footer>
  </body>
</html>
