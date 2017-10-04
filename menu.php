<div id="principal_header">
<nav>
  <a href="home.php">
    <div id="logo">
        <img id="img_logo_principal" src="imagens/td.png" alt="TourDreams">
    </div>
    </a>
    <script type="text/javascript">
              $(document).ready(function() {

                  $(".menu_busca_sel").click(EsconderMensagem);

                  });
              function EsconderMensagem(){
                  $(".menu_busca").hide();
              }

          </script>
    <div id="principal_menu">

              <?php include('principalMenu.php') ?>
    </div>
</nav>

</div>

  <div id="header_escondida">
    <nav id="nav_dois">

    <div id="logo_escondida">
        <a href="home.php"><img id="img_logo_principal_escondida" src="imagens/td_escondida.png" alt="TourDreams"></a>
    </div>
      <?php include('principalMenu.php') ?>
    </nav>
  </div>
