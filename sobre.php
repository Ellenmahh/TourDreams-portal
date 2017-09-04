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

      <script type="text/javascript">
        $(function() {
                $('a').bind('click',function(event){
                    var $anchor = $(this);

                  $('html, body').stop().animate({scrollTop:
                    $($anchor.attr('href')).offset().top}, 1000,'easeInOutExpo');
                });
            });
      </script>
      <?php
        include('tradutor.php');
       ?>
  </head>
  <body>
    <header>
      <?php include('menu.php'); ?>
    </header>
    <section>
      <div id="principal">
        <div id="slider">
        	<img class="slides" title="CONFIRA" src="Imagens/hotel4.jpg" alt="">
        	<img class="slides" title="CONFIRA" src="Imagens/hotel2.jpg" alt="">
        	<img class="slides" title="CONFIRA" src="Imagens/hotel3.jpg" alt="">
        	<button class = "button" onClick = "plusIndex(-1)" id = "btn1">&#10094;</button>
        	<button class = "button" onClick = "plusIndex(1)" id = "btn2">&#10095;</button>
        </div>
        <div class="">
          <ul>
            <li>
              <a href="#area_info_sobre" style="transition: all .25s linear;">Sobre</a>
            </li>
            <li>
              <a href="#area_info_missao">Missão</a>
            </li>
            <li>
              <a href="#area_info_visao">Visão</a>
            </li>
            <li>
              <a href="#area_info_valores">Valores</a>
            </li>
          </ul>
        </div>
        <div id="area_info_sobre">
          <div class="titulo_info_sobre">
            <p>SOBRE NOSSA EMPRESA</p>
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
                </p>
          </div>
        </div>
        <div id="area_info_visao">
          <div class="titulo_info_sobre">
            <p>VISÃO</p>
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
    <!-- ========================================= Script para o slider ========================================= -->
		<script>
			var index = 1;

			function plusIndex(n){
				index = index + n;
				showImage(index);
			}

			showImage(1);

			function showImage(n){
				var i;
				var x = document.getElementsByClassName("slides");
				if(n > x.length){index = 1};
				if(n < 1){index = x.length};
				for(i=0;i<x.length;i++)
					{
						x[i].style.display = "none";
					}
				x[index-1].style.display = "block";
			}

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
