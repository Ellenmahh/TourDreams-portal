<div id="principal_header">
  <div id="logo">
      <a href="index.php"><img id="img_logo_principal" src="imagens/td.png" alt="TourDreams"></a>
  </div>
  <script type="text/javascript">
            $(document).ready(function() {

                $(".menu_busca_sel").click(EsconderMensagem);

                });


            function EsconderMensagem(){
                $(".menu_busca").hide();
            }

        </script>
  <div id="principal_menu">

    <?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?>
      <div class="menu_busca">
          <a href="buscaAvancada.php"
          <?php if($paginaCorrente == 'buscaAvancada.php') {echo'class="menu_busca"';}?>>
          <h1>Busca Avançada</h1></a>
      </div>
      <div class="menu_parceiros">
          <a href="parceiros.php"
          <?php if($paginaCorrente == 'parceiros.php') {echo'class="menu_parceiros"';} ?>>
          <h1>Parceiros</h1></a>
      </div>
      <div class="menu">
          <a href="conhecaDestino.php"
          <?php if($paginaCorrente == 'conhecaDestino.php') {echo'class="menu"';}?>>
          <h1>Conheça seu destino</h1></a>
      </div>
      <div class="menu">
          <a href="melhoresDestinos.php"
          <?php if($paginaCorrente == 'melhoresDestinos.php') {echo'class="menu"';}?>>
          <h1>Melhores destinos</h1></a>
      </div>
      <div class="menu_promocoes">
        <a href="promocao.php"
        <?php if($paginaCorrente == 'promocao.php') {echo'class="menu_promocoes"';}?>>
        <h1>Promoções</h1></a>
      </div>
      <div class="menu_sobre">
          <a href="sobre.php"
          <?php if($paginaCorrente == 'sobre.php') {echo'class="menu_sobre"';}?>>
          <h1>Sobre</h1></a>
      </div>

  </div>



</div>
<div id="header_escondida">
  <div id="logo_escondida">
      <a href="index.php"><img id="img_logo_principal_escondida" src="imagens/td_escondida.png" alt="TourDreams"></a>
  </div>

    <div id="menu_escondida">
      <div class="menu_busca">
          <a href="buscaAvancada.php"
          <?php if($paginaCorrente == 'buscaAvancada.php') {echo'class="menu_busca"';}?>>
          <h1>Busca Avançada</h1></a>
      </div>
      <div class="menu_parceiros">
          <a href="parceiros.php"
          <?php if($paginaCorrente == 'parceiros.php') {echo'class="menu_parceiros"';} ?>>
          <h1>Parceiros</h1></a>
      </div>
      <div class="menu">
          <a href="conhecaDestino.php"
          <?php if($paginaCorrente == 'conhecaDestino.php') {echo'class="menu"';}?>>
          <h1>Conheça seu destino</h1></a>
      </div>
      <div class="menu">
          <a href="melhoresDestinos.php"
          <?php if($paginaCorrente == 'melhoresDestinos.php') {echo'class="menu"';}?>>
          <h1>Melhores destinos</h1></a>
      </div>
      <div class="menu_promocoes">
        <a href="promocao.php"
        <?php if($paginaCorrente == 'promocao.php') {echo'class="menu_promocoes"';}?>>
        <h1>Promoções</h1></a>
      </div>
      <div class="menu_sobre">
          <a href="sobre.php"
          <?php if($paginaCorrente == 'sobre.php') {echo'class="menu_sobre"';}?>>
          <h1>Sobre</h1></a>
      </div>

    </div>

</div>
