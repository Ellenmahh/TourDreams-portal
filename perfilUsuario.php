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
	   <script>
		$(document).ready(function(){
			$("a[rel=modal]").click( function(ev){
				ev.preventDefault();

				var id = $(this).attr("href");

				var alturaTela = $(document).height();
				var larguraTela = $(window).width();

				//colocando o fundo preto
				$('#mascara').css({'width':larguraTela,'height':alturaTela});
				$('#mascara').fadeIn(1000);
				$('#mascara').fadeTo("slow",0.8);

				var left = ($(window).width() /2) - ( $(id).width() / 2 );
				var top = ($(window).height() / 2) - ( $(id).height() / 2 );

				$(id).css({'top':top,'left':left});
				$(id).show();
			});

			$("#mascara").click( function(){
				$(this).hide();
				$(".window").hide();
			});

			$('.fechar').click(function(ev){
				ev.preventDefault();
				$("#mascara").hide();
				$(".window").hide();
			});
		});

	  </script>
  </head>
  <body>
		<div class="window" id="janela1">
			<hgroup id="hgroup_modal">
			  <h1 class="h1_modal"><p>O QUE É MILHAS TRAVEL FIDELIDADE</p></h1>
			</hgroup>
			<form id="form_modal">
			  <div class="group">
				   <p>O Milhas Travel Fidelidade conhecida como MTF, é uma
           maneira que a TourDreams encontrou de presentiar nossos
         clientes por tais ações realizadas no portal, ou até mesmo, no aplicativo.</p>
			  </div>
			</form>
		</div>
    <div class="window" id="janela2">
			<hgroup id="hgroup_modal">
			  <h1 class="h1_modal"><p>COMO ADQUIRIR MILHAS TRAVEL FIDELIDADE</p></h1>
			</hgroup>
			<form id="form_modal">
			  <div class="group">
				   <p>Para adquirir e acumular seus pontos MTF, é necessário
           realizar reservas ou interagir, publicando comentários em
         lugares que você ja visitou.</p>
			  </div>
			</form>
		</div>

<!-- mascara para cobrir o site -->
<div id="mascara"></div>
    <header>
        <?php include('menu.php'); ?>
    </header>

      <section>
        <!--<div id="principal">-->
          <div id="capa_usuario">
            <div id="img_perfilUsuario">
              <img src="imagens/harry.jpg" alt="">
            </div>
            <div id="area_info_perfilUsuario">
              <p>Nome</p>
              <p>Usuário</p>
              <p>E-mail</p>
              <p>Senha</p>
            </div>
            <div id="mtf_perfilUsuario">
              <p id="titulo_mtf_perfilUsuario">MILHAS TRAVEL FIDELIDADE</p>
              <div id="pontuacao_mtf_perfilUsuario">
                <img src="imagens/mtf.png" alt="">
                <p>000000</p>
              </div>
              <div id="duvida_mtf_perfilUsuario">
                <a href="#janela1" id="a_index_duvida" rel="modal"><p>O que é MTF?</p></a>
                <a href="#janela2" id="a_index_duvida" rel="modal"><p>Como adquirir?</p></a>
              </div>

            </div>
          </div>
          <div id="txt_perfilUsuario">
            <p>LUGARES POR ONDE VOCÊ PASSOU</p>
          </div>

          <div id="principal_produtos">
            <div class="produtos_div">
              <img src="imagens/hotel11.jpg" alt="">
              <div class="legenda_produto">
                <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                <p class="txt_estado_hotel">São Paulo</p>
                <img src="imagens/wifi.png" alt="">
                <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

              </div>

            </div>
            <div class="produtos_div">
              <img src="imagens/hotel5.jpg" alt="">
              <div class="legenda_produto">
                <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                <p class="txt_estado_hotel">São Paulo</p>
                <img src="imagens/wifi.png" alt="">
                <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

              </div>

            </div>
            <div class="produtos_div">
              <img src="imagens/hotel9.jpg" alt="">
              <div class="legenda_produto">
                <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                <p class="txt_estado_hotel">São Paulo</p>
                <img src="imagens/wifi.png" alt="">
                <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

              </div>

            </div>
            <div class="produtos_div">
              <img src="imagens/hotel8.jpg" alt="">
              <div class="legenda_produto">
                <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
                <p class="txt_estado_hotel">São Paulo</p>
                <img src="imagens/wifi.png" alt="">
                <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">

              </div>

            </div>
          <!--</div>-->
        </div>


      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
