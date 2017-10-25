<?php
$id_usuario = $_GET['id_usuario'];


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


<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  </head>
  <body>

    <header>
      <div id="ex1" class="modal">
        <p>Ops.. Esta data esta indisponível no momento, por favor, selecione outras datas.</p>

      </div>

      <!-- Link to open the modal -->
      <p><a href="#ex1" rel="modal:open" id="open_modal">Open Modal</a></p>

      <div id="ex2" class="modal">
        <p>Ops.. Para realizar uma reserva, é necessário estar logado, não possui uma conta? <a href="cadastroUsuario.php">Cadastre-se</a></p>

      </div>

      <!-- Link to open the modal -->
      <p><a href="#ex2" rel="modal:open" id="open_modal2">Open Modal</a></p>
        <?php include('menu.php'); ?>
    </header>
    <section>

      <div id="principal">



          <?php
                //Incluindo o arquivo da controller para fazer o select
                require_once('controllers/visualizar_quartos_controller.php');
                //Instancia do objeto de controller, e chamada dos metodos para listar os registros
                $controller_quartos = new controllerQuartos();
                $rsReserva = $controller_quartos->listar_quartos_reserva();
                $cont=0;
                while ($cont<count($rsReserva)) {
                  $id_quarto = $rsReserva[$cont]->id_quarto;
                  $id_preco_quarto = $rsReserva[$cont]->preco_quarto;




               ?>
          <form class="" action="router.php?controller=reservas&modo=nova_reserva&id_quarto=<?php echo($_GET['id_quarto']); ?>&id_usuario=<?php echo($id_usuario); ?>&preco_quarto=<?php echo($id_preco_quarto); ?>" method="post">
          <div id="area_img_areaReserva">

            <div class="fluid_container">

              <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
                <?php
                  $sql = "select * from tbl_imagens_quarto where id_quarto = $id_quarto";
                  $select = mysql_query($sql);
                  while($rs=mysql_fetch_array($select)){






                ?>
                  <div data-thumb="<?php echo($rs['nome_imagem']);?>" data-src="<?php echo($rs['nome_imagem']);?>">

                  </div>
                  <?php

                    }

                   ?>
              </div>
            </div>
            <div style="clear:both; display:block; height:100px"></div>
            <div class="caixa_areaReserva">
              <div id="cancelamento_reserva_areaReserva">
                <p>CANCELAMENTO PODE SER FEITO EM ATÉ 30 DIAS ANTES DA DATA</p>
              </div>

              <div id="entrada_saida_areaReserva">
                <p>Data de entrada* <input class="insert_data" type="text" placeholder=" Insira a entrada" name="txt_entrada"  required id="calendario"/></p>
                <p>Data de saída* <input class="insert_data" type="text" placeholder=" Insira a saída" name="txt_saida"  required id="calendario2"/></p>
              </div>

            </div>
          </div>

          <div id="area_txt_areaReserva">
            <div class="caixa_areaReserva">
              <div id="nome_hotel_areaReserva">
                <p><?php echo($rsReserva[$cont]->nome_quarto);?></p>
              </div>
              <p><?php echo($rsReserva[$cont]->rua_quarto);?> - <?php echo($rsReserva[$cont]->cidade_quarto);?> - <?php echo($rsReserva[$cont]->uf_quarto);?></p>
              <p>R$<?php echo($rsReserva[$cont]->preco_quarto);?></p>
            </div>
            <div class="caixa_areaReserva">
              <div id="sub_texto_areaReserva">
                <p>Sua reserva inclui:</p>
              </div>
              <?php
              $sql = "select c.descricao_carac_quarto from caracteristicas_quarto as c inner join caracteristicas_quarto_hotel as ch on ch.id_carac_quarto = c.id_carac_quarto inner join tbl_quarto as q on q.id_quarto = ch.id_quarto where q.id_quarto = $id_quarto;";
              $select = mysql_query($sql);

              while ($rs=mysql_fetch_array($select)) {

               ?>
              <p> - <?php echo($rs['descricao_carac_quarto']); ?></p>
            <?php
              }

             ?>
            </div>
            <!--<input type="submit" name="finaliza" value="finaliza">-->

            <!--<div class="caixa_areaReserva">

              <div id="sub_texto_areaReserva">
                <p>Faça seu desconto:</p>
              </div>
              <p>Pontuação atual: 0</p>
              <input type="radio" name="" value="">dhkjahd
            </div>-->

            <input id="btn_finalizarReserva" type="submit" name="btn_produto" value="FINALIZAR RESERVA" class="btn_produto_areaReserva">
            </form>
            <?php
              $cont+=1;

              }


            ?>

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

        </div>
      </div>

    </section>

    <footer>
      <?php include('rodape.php'); ?>
    </footer>
    <?php



    if(isset($_GET['data_invalida'])){


    ?>
    <script type="text/javascript">




    $('#open_modal').click();





    </script>

    <?php
    }
    ?>

    <?php



    if(isset($_GET['usuario_null'])){


    ?>
    <script type="text/javascript">




    $('#open_modal2').click();





    </script>

    <?php
    }
    ?>
  </body>
</html>
