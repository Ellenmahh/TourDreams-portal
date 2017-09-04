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
			  <h1 class="h1_modal"><p>ÁREA DE AUTENTICAÇÃO</p></h1>
			  <h3 class="h3_modal"><p>Hoteleiros.</p></h3>
			</hgroup>
			<form id="form_modal">

			  <div class="group">
				<input type="text" class="input_modal"><span class="highlight"></span><span class="bar"></span>
				<label class="label_modal">Login</label>
			  </div>
			  <div class="group">
				<input type="email"  class="input_modal"><span class="highlight"></span><span class="bar"></span>
				<label class="label_modal">Senha</label>
			  </div>
			  <button type="button" class="button buttonBlue">Conectar-se
				<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>

			</form>

		</div>


<!-- mascara para cobrir o site -->
<div id="mascara"></div>
    <header>
        <?php include('menu.php'); ?>
    </header>

      <section>
          <div id="template">
              <img src="imagens/template.png" alt="template">
            <div id="busca_index">

              <input type="text" id="input_busca" name="" value="" placeholder=" Locais, Cidades, Hotéis" >
              <button id="btn_buscar" type="submit">
                <img src="imagens/img_btn2.png" alt="dasd">
              </button>

            </div>

              <div id="principal_login">
                  <div id="foto_user">
                    <img src="imagens/user.png" alt="">

                  </div>
                    <div id="inputs_login">
                      <input class="inputs_login" type="text" name="txt_login" style="font-family: Tahoma; font-size: 16px" placeholder=" Login">
                      <br>
                      <input class="inputs_login" type="text" name="txt_senha" style="font-family: Tahoma; font-size: 16px" placeholder=" Senha">

                    </div>
                      <div id="btn_login">
                        <input id="btn_logar" type="submit" name="btn_logar" value="Conectar-se" style="font-family: Tahoma; font-size: 20px">

                      </div>
                        <div id="cadastra_se">
                          <a href="#" id="a_index_cadastrar">Cadastre-se</a>

                        </div>
            						<div id="log_hoteleiro">
                          <a href="#janela1" id="a_index_cadastrar" rel="modal">Entrar como hoteleiro</a>

                        </div>

              </div>
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
                    <img src="imagens/hotel5.jpg" alt="">
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
                      <img src="imagens/hotel6.jpg" alt="">
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
                      <img src="imagens/hotel7.jpg" alt="">
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
                        <img src="imagens/hotel8.jpg" alt="">
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
                          <img src="imagens/hotel9.jpg" alt="">
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
                          <img src="imagens/hotel10.jpg" alt="">
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
                            <img src="imagens/hotel11.jpg" alt="">
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
                              <img src="imagens/hotel12.jpg" alt="">
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
