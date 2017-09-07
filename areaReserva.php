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
                <img src="imagens/hotel10.jpg" alt="">
              </div>
            </div>
            <div id="area_txt_areaReserva">
              <p>Hotel tal</p>
            </div>

          </div>
      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
