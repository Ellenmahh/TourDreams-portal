<?php


  //incluir o arquivo de conexao
  require_once('models/bd_class.php');
  //cria uma instancia da classe mysql_db
  $conexao_bd = new mysql_db();
  //estabelece a conexao com BD
  $conexao_bd->conectar();




$valor_total = $_GET['valor_total'];
$id_quarto = $_GET['id_quarto'];
$total_dias = $_GET['total_dias'];
$id_usuario = $_GET['id_usuario'];
$data_entrada = $_GET['data_entrada'];
$data_saida = $_GET['data_saida'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include_once('head.php'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.slippity.js"></script>
<script>
$(document).ready(function(){
$("#my-slider").slippity();
});
</script>
<script>
$(document).ready(function(){
$("#my-slider").slippity({
arrowClass: ".arrow", // the selector for arrows navigation.
slideClass: ".slide", // the selector for slide items.
dynamicHeight: true, // dynamiclly set the height of your images
animationTime: 500, // the delay time between slides.
start: function(){}, // callback
end: function(){}}); // callback
});
</script>


  </head>
  <body>
    <header>
        <?php include('menu.php'); ?>
    </header>
      <section>
        <div id="principal">
          <div id="area_optFinaliza">
            <div id="txt_area_finalizar">
              <p>Sua reserva foi solicitada, aguarde um pouco, entraremos em contato para mais detalhes: Valor Total: R$<?php echo($valor_total) ?>, Dias totais: <?php echo ($total_dias);  ?>. (Você pode acompanhar suas reservas em seu perfil de usuário).</p>
            </div>
            <div id="btns_area_finaliza">
              <a href="areaReserva.php?id_quarto=<?php echo($id_quarto); ?>&id_usuario=<?php echo($id_usuario); ?>">
                <div class="btn_area_reserva">
                  <p>CONTINUAR RESERVANDO</p>
                </div>
              </a>

              <a href="home.php">
                <div class="btn_area_reserva">
                  <p>VOLTAR PARA HOME</p>
                </div>
              </a>


            </div>
          </div>
        </div>

        <div class="recomendacao_reserva">
          <h1>ACHAMOS QUE VOCÊ VAI GOSTAR</h1>

          <div id="my-slider" class="slider">
            <a class="left arrow"></a><a class="right arrow"></a>
            <div class="slide active"> <img src="imagens/slides_areaReserva/hotel1.jpg"> </div>
            <div class="slide"> <img src="imagens/slides_areaReserva/hotel2.jpg"> </div>
            <div class="slide"> <img src="imagens/slides_areaReserva/hotel3.jpg"> </div>
            </div>


        </div>


      </section>

      <footer>
          <?php include('rodape.php'); ?>

      </footer>

  </body>
</html>
