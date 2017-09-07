<!DOCTYPE html>
<html>
  <head>
    <?php include('head.php'); ?>
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
