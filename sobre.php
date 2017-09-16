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
		<div id="espaco_sobre">
			<div id="slider">
				<img class="slides" title="CONFIRA" src="Imagens/hotel4.jpg" alt="">
				<img class="slides" title="CONFIRA" src="Imagens/hotel2.jpg" alt="">
				<img class="slides" title="CONFIRA" src="Imagens/hotel3.jpg" alt="">
				<button class = "button" onClick = "plusIndex(-1)" id = "btn1"> &#10094;</button>
				<button class = "button" onClick = "plusIndex(1)" id = "btn2"> &#10095;</button>
			</div>

			<div id="menu_hex">
				<div class="hexagon">
					 <a class="scroll" href="#slider"><p class="menu_opt_sobre" > SOBRE</p></a>
				</div>
				<div class="hexagon2">
					 <a class="scroll" href="#area_info_sobre"><p class="menu_opt_sobre"> MISSÃO</p></a>
        </div>
				<div class="hexagon3">
					 <a class="scroll" href="#area_info_visao"><p class="menu_opt_sobre_visao"> VALORES</p></a>
				</div>
				<div class="hexagon4">
					 <a class="scroll" href="#area_info_missao"><p class="menu_opt_sobre"> VISÃO</p></a>
				</div>
			</div>
		</div>
        <div id="area_info_sobre">
          <div class="titulo_info_sobre">
            <p >SOBRE NOSSA EMPRESA</p>
            <img src="imagens/sobre.png" alt="">
          </div>
          <div class="txt_info_sobre">
            <p>teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
                </p>
          </div>
        </div>
        <div id="area_info_missao">
          <div class="titulo_info_sobre">
            <p>MISSÃO</p>
            <img src="imagens/missao (2).png" alt="">
          </div>
          <div class="txt_info_sobre">
            <p  >teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
                </p>
          </div>
        </div>
        <div id="area_info_visao">
          <div class="titulo_info_sobre">
            <p>VISÃO</p>
            <img src="imagens/visao.png" alt="">
          </div>
          <div class="txt_info_sobre">
            <p>teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
                </p>
          </div>
        </div>
        <div id="area_info_valores">
          <div class="titulo_info_sobre">
            <p>VALORES</p>
            <img src="imagens/valores.png" alt="">
          </div>
          <div class="txt_info_sobre">
            <p>teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
            teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
              teste teste teste teste teste teste
                </p>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
    /* Passar automaticamente as imagens */
    autoSlide();
    function autoSlide(){
      var i;
      var x = document.getElementsByClassName("slides");
      for(i=0;i<x.length;i++)
        {
          x[i].style.display = "none";
        }
      if(index > x.length){ index = 1}
      x[index-1].style.display = "block";
      index++;
      setTimeout(autoSlide, 3000);
    }
    </script>
    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
