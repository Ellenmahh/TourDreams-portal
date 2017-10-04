<!DOCTYPE html>

<?php
	if(isset($_POST['btn_quarto_editar'])){
		header('location:editarQuarto.php');

	}

?>
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
            <p>MEUS QUARTOS CADASTRADOS</p>
          </div>
			<form  name="perfil_Parceiro" method="post" enctype="multipart/form-data" action="editarQuarto.php">

			  <div id="principal_produtos">
					<div class="produtos_div_verQuartos">
						<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel9.jpg" alt=""></a>
						<div class="legenda_produto_verQuartos">
							<p class="txt_nome_hotel">Quarto tal</p>
							<p class="txt_estado_hotel">São Paulo</p>
							<div class="caracteristicas_verQuartos">
								<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
							</div>
							<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>
							<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>

						</div>

					</div>

				<!--</li>
			</ul>-->

			<div class="produtos_div_verQuartos">
				<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel7.jpg" alt=""></a>
				<div class="legenda_produto_verQuartos">
					<p class="txt_nome_hotel">Quarto tal</p>
					<p class="txt_estado_hotel">São Paulo</p>
					<div class="caracteristicas_verQuartos">
						<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
					</div>
					<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>

					<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>

				</div>

			</div>
			<div class="produtos_div_verQuartos">
				<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel5.jpg" alt=""></a>
				<div class="legenda_produto_verQuartos">
					<p class="txt_nome_hotel">Quarto tal</p>
					<p class="txt_estado_hotel">São Paulo</p>
					<div class="caracteristicas_verQuartos">
						<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
					</div>
					<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>

					<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>

				</div>

			</div>
			<div class="produtos_div_verQuartos">
				<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel2.jpg" alt=""></a>
				<div class="legenda_produto_verQuartos">
					<p class="txt_nome_hotel">Quarto tal</p>
					<p class="txt_estado_hotel">São Paulo</p>
					<div class="caracteristicas_verQuartos">
						<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
					</div>
					<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>

					<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>
				</div>

			</div>
			<div class="produtos_div_verQuartos">
				<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel4.jpg" alt=""></a>
				<div class="legenda_produto_verQuartos">
					<p class="txt_nome_hotel">Quarto tal</p>
					<p class="txt_estado_hotel">São Paulo</p>
					<div class="caracteristicas_verQuartos">
						<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
					</div>
					<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>

					<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>
				</div>

			</div>
			<div class="produtos_div_verQuartos">
				<a href="editarQuarto.php"><img class="img_hotel" src="imagens/hotel3.jpg" alt=""></a>
				<div class="legenda_produto_verQuartos">
					<p class="txt_nome_hotel">Quarto tal</p>
					<p class="txt_estado_hotel">São Paulo</p>
					<div class="caracteristicas_verQuartos">
						<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
					</div>
					<p class="txt_caracteristica_verQuartos">Wi-fi gratuito</p>

					<a href="editarQuarto.php"><input type="submit" name="btn_quarto_editar" value="editar" class="btn_produto_verQuartos"></a>

				</div>

			</div>

          <!--</div>-->
		  </form>
        </div>


      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
