<!DOCTYPE html>
<html>
  <head>
    <?php include('head.php'); ?>
  </head>
  <body>
    <header>
        <?php include('menu.php'); ?>
    </header>

      <section>
          <!--<div id="template">
              <img src="imagens/template.png" alt="template">

              <div id="principal_login">
                  <div id="foto_user">
                    <img src="imagens/harry.jpg" alt="">
                    <p>Bem vindo, Andrey</p>
                  </div>
              </div>
          </div>-->
          <div id="principal">
            <div id="area_img_areaReserva">
              <div id="img_areaReserva">
                <img src="imagens/hotel7.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel8.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel9.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel4.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel1.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel3.jpg" alt="">
              </div>
              <div class="img_areaReserva_mini">
                <img src="imagens/hotel2.jpg" alt="">
              </div>

            </div>
            <div id="area_txt_areaReserva">
              <div class="caixa_areaReserva">
                <div id="nome_hotel_areaReserva">
                  <p>Hotel tal</p>
                </div>
                <p>Endereço do Hotel</p>
                <p>N° do Hotel</p>
              </div>
              <div class="caixa_areaReserva">
                <div id="reserva_inclui_areaReserva">
                  <p>Sua reserva inclui:</p>
                </div>
                <p>- Wi-fi</p>
                <p>- Café da manhã</p>
              </div>
              <div class="caixa_areaReserva">
                <div id="cancelamento_reserva_areaReserva">
                  <p>Cancelamento pode ser feito em até 30 dias antes da data</p>
                </div>

                <div id="entrada_saida_areaReserva">
                  <p>Data de entrada: <input class="insert_data" type="text" placeholder="Insira a entrada" id="calendario" /></p>
                  <p>Data de saída: <input class="insert_data" type="text" placeholder="Insira a saída" id="calendario2" /></p>
                </div>
              </div>
              <input type="submit" name="btn_produto" value="FINALIZAR RESERVA" class="btn_produto_areaReserva">
            </div>

          </div>
      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
