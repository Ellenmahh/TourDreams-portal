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
			<?php

            require_once('crud_cadastroParceiro/perfilparceiro_view.php');

			?>
        </div>


      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
