<!DOCTYPE html>
<html>
  <head>
    <?php include('head.php'); ?>
  </head>
  <body>
    <div class="window" id="editar_perfilUsuario">
			<hgroup id="hgroup_modal_editar_perfilUsuario">
			  <h1 class="h1_modal"><p>ATUALIZE SUAS INFORMAÇÕES</p></h1>
			</hgroup>
			<form id="form_modal_editar_perfilUsuario">
        <div class="group_editar_perfilUsuario">
				   <input type="text" placeholder="nome" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
				   <!--<label class="label_modal">nome</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="e-mail" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">e-mail</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="endereço" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">endereço</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="telefone" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">telefone</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="celular" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">celular</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="CPF" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">CPF</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="RG" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">RG</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="usuário" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">usuário</label>-->
			  </div>
        <div class="group_editar_perfilUsuario">
          <input type="text" placeholder="senha" class="input_modal_editar_perfilUsuario"><span class="highlight"></span><span class="bar"></span>
          <!--<label class="label_modal">senha</label>-->
			  </div>
        <button type="button" class="button_editar_perfilUsuario buttonBlue">Salvar
				   <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>
        <button type="button" class="button_editar_perfilUsuario buttonBlue">Limpar
				   <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
			  </button>
			</form>
		</div>
		<div class="window" id="janela1">
			<hgroup id="hgroup_modal">
			  <h1 class="h1_modal"><p>O QUE É MILHAS TRAVEL FIDELIDADE</p></h1>
			</hgroup>
			<form id="form_modal">
			  <div class="group">
				   <p>O Milhas Travel Fidelidade conhecida como MTF, é uma
           maneira que a TourDreams encontrou de presentear nossos
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
				   <p>Para adquirir e acumular seus pontos MTF, é necessário que algum cliente
             realize reservas em seu hotel.
           </p>
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
          <div id="capa_parceiro">

            <div id="mtf_perfilParceiro">
              <p id="titulo_mtf_perfilParceiro">MILHAS TRAVEL FIDELIDADE</p>
              <div id="pontuacao_mtf_perfilParceiro">
                <img src="imagens/mtf.png" alt="">
                <p>000000</p>
              </div>
              <div id="duvida_mtf_perfilParceiro">
                <a href="#janela1" id="a_index_duvida" rel="modal"><p>O que é MTF?</p></a>
                <a href="#janela2" id="a_index_duvida" rel="modal"><p>Como adquirir?</p></a>
              </div>

            </div>
          </div>
          <div id="txt_perfilUsuario">
            <p>HOTÉIS JÁ CADASTRADOS</p>
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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
                <input type="submit" name="btn_produto" value="editar" class="btn_produto">

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
