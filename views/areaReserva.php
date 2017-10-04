<?php

$form_reserva_aceita = "";
$form_reserva_rejeitada = "";

if (isset($_POST['btn_produto'])) {

  $entrada = $_POST['txt_entrada'];
  $saida = $_POST['txt_saida'];

  if ($saida <= $entrada) {

    $form_reserva_rejeitada = "<div id='reserva_rejeitada' style='display:block'>";

    $form_reserva_aceita = "<div id='reserva_aceita' style='display:none'>";

  }else{

    $form_reserva_rejeitada = "<div id='reserva_rejeitada' style='display:none'>";

    $form_reserva_aceita = "<div id='reserva_aceita' style='display:block'>";

  }

}else{

  $form_reserva_rejeitada = "<div id='reserva_rejeitada' style='display:none'>";

  $form_reserva_aceita = "<div id='reserva_aceita' style='display:none'>";

}

?>
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
      <div id="principal">
        <form class="" action="areaReserva.php" method="post">

          <div id="area_img_areaReserva">
            <div class="fluid_container">

              <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel3.jpg" data-src="imagens/slides_areaReserva/hotel3.jpg">

                  </div>
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel4.jpg" data-src="imagens/slides_areaReserva/hotel4.jpg">

                  </div>
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel5.jpg" data-src="imagens/slides_areaReserva/hotel5.jpg">

                  </div>
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel6.jpg" data-src="imagens/slides_areaReserva/hotel6.jpg">

                  </div>
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel9.jpg" data-src="imagens/slides_areaReserva/hotel9.jpg">

                  </div>
                  <div data-thumb="imagens/slides_areaReserva/thumbs/hotel7.jpg" data-src="imagens/slides_areaReserva/hotel7.jpg">

                  </div>
              </div>
            </div>
            <div style="clear:both; display:block; height:100px"></div>
            <div class="caixa_areaReserva">
              <div id="cancelamento_reserva_areaReserva">
                <p>CANCELAMENTO PODE SER FEITO EM ATÉ 30 DIAS ANTES DA DATA</p>
              </div>

              <div id="entrada_saida_areaReserva">
                <p>Data de entrada* <input class="insert_data" type="text" placeholder=" Insira a entrada" name="txt_entrada" id="calendario" /></p>
                <p>Data de saída* <input class="insert_data" type="text" placeholder=" Insira a saída" name="txt_saida" id="calendario2" /></p>
              </div>

            </div>
          </div>
          <div id="area_txt_areaReserva">
            <div class="caixa_areaReserva">
              <div id="nome_hotel_areaReserva">
                <p>Quarto tal</p>
              </div>
              <p>Endereço do Hotel</p>
              <p>N° do Hotel</p>
            </div>
            <div class="caixa_areaReserva">
              <div id="sub_texto_areaReserva">
                <p>Sua reserva inclui:</p>
              </div>
              <p>- Wi-fi</p>
              <p>- Café da manhã</p>
            </div>
            <!--<div class="caixa_areaReserva">

              <div id="sub_texto_areaReserva">
                <p>Faça seu desconto:</p>
              </div>
              <p>Pontuação atual: 0</p>
              <input type="radio" name="" value="">dhkjahd
            </div>-->

            <input id="btn_finalizarReserva" type="submit" name="btn_produto" value="FINALIZAR RESERVA" class="btn_produto_areaReserva">

            <?php echo($form_reserva_rejeitada) ?>
              <div class="caixa_msgReserva">
                <p>Estabeleça uma data coerente.</p>
              </div>

            </div>

            <?php echo($form_reserva_aceita) ?>
              <div class="caixa_msgReserva">
                <p>Reserva realizada com sucesso!</p>
              </div>

            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
