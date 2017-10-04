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

    <!--<div id="template_info_todos" class="content visible">
      <img src="imagens/maldives.jpg" alt="">
      <div id="txt_template_info_buscaAvancada">
        <p id="texto">Faça uma pesquisa mais detalhada</p>
      </div>
    -->
    </div>
      <div id="principal">


        <div id="area_pesquisa">
          <input id="input_busca_avancada" placeholder="Faça uma busca..." type="text" name="" value="">

          <button id="btn_pesquisa_avancada" type="button" name="button" >
            <a href="#" id="mostrar"><img id="img_filtro" src="imagens/filtro.png" alt="dasd"></a></button>
        </div>
        <div id="filtros">

          <div class="container">
            <div class="control-group">
              <!--<p class="titulo_filtro" >ESTRELAS</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <!--<label class="control control--checkbox">Disabled
                <input type="checkbox" disabled="disabled"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">Disabled & checked
                <input type="checkbox" disabled="disabled" checked="checked"/>
                <div class="control__indicator"></div>
              </label>-->
            </div>
            <div class="control-group">
              <!--<p class="titulo_filtro" >LOCAL</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
            </div>
            <div class="control-group">
              <!--<p class="titulo_filtro" >PREÇO</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
            </div>
            <div class="control-group">
              <!--<p class="titulo_filtro" >PREÇO</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
            </div>
            <div class="control-group">
              <!--<p class="titulo_filtro" >PREÇO</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
            </div>
            <div class="control-group">
              <!--<p class="titulo_filtro" >PREÇO</p>-->
              <label class="control control--checkbox">TESTE
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
              <label class="control control--checkbox">TESTE
                <input type="checkbox"/>
                <div class="control__indicator"></div>
              </label>
            </div>
            <input id="btn_aplicarFiltros" type="submit" name="button" value="APLICAR" />
          </div>

        </div>

        <div id="txt_busca_avancada">
          <p>ALGUMAS SUGESTÕES</p>
        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel12.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>

          </div>

        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel11.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>

          </div>

        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel10.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>
          </div>

        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel9.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>

          </div>

        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel8.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>

          </div>

        </div>
        <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
          <img src="imagens/hotel7.jpg" alt="">
          <div class="legenda_produto">
            <p class="txt_nome_hotel">Hotel Fazende Suipe</p>
            <p class="txt_estado_hotel">São Paulo</p>
            <div class="estrelas">
              <img class="img_estrelas_hotel" src="imagens/estrelas.png" alt="">
            </div>
            <div class="caracteristicas_hotel">
              <img class="img_caracteristica_hotel" src="imagens/wifi.png" alt="">
            </div>
            <p class="txt_caracteristica_hotel">Wi-fi grátis</p>
            <p class="txt_diaria_hotel" >Diárias a partir de</p>
            <p class="txt_rs" >R$</p>
            <p class="txt_preco_hotel">200</p>
            <a href="verQuartos.php"><input type="submit" name="btn_produto" value="ver quartos" class="btn_produto"></a>

          </div>

        </div>
      </div>
    </section>
    <footer>
      <?php include('rodape.php'); ?>
    </footer>
  </body>
</html>
