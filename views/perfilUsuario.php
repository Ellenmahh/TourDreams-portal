<?php
  session_start();
  $id_usuario = $_SESSION['id_usuario'];
?>
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

      <?php
          require_once('crud_cadastroUsuario/editar_usuarios_view.php');
      ?>

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
				   <p>Para adquirir e acumular seus pontos MTF, é necessário
           <a href="index.php" color="#5270ff">realizar reservas</a> ou interagir,
           <a href="conhecaDestino.php">publicando comentários</a> em
         lugares que você ja visitou.</p>
			  </div>
			</form>
		</div>
	<div class="window" id="janela3">
		<hgroup id="hgroup_modal">
			  <h1 class="h1_modal"><p>DETALHES STATUS</p></h1>
		</hgroup>
		<form id="form_modal">
			  <div class="group">
				<div id="espaco_icones_status_detalhes">
					<div class="icone_status_detalhes_">
						&nbsp;<img src="imagens/pendentee.png" alt="pendente" width="100%" height="100%">
					</div>
					<div class="_status_detalhes_2">
						 Reserva Pendente
					</div>
					<div class="icone_status_detalhes_">
						<img src="imagens/aprovado.png" alt="aprovado" width="100%" height="100%">
					</div>
					<div class="_status_detalhes_2">
						Reserva Aprovada
					</div>
					<div class="icone_status_detalhes_">
						<img src="imagens/curtindo_cinza.png" alt="curtindo_viagem" width="100%" height="100%">
					</div>
					<div class="_status_detalhes_2">
						Curtindo Viagem
					</div>
					<div class="icone_status_detalhes_">
						<img src="imagens/aguardando_avalicao_cinza.png" alt="avaliacao" width="100%" height="100%">
					</div>
					<div class="_status_detalhes_2">
						Aguardando sua Avaliação
					</div>
				</div>
			  </div>
		</form>
	</div>
<!-- mascara para cobrir o site -->
<div id="mascara_usuario"></div>
    <header>
        <?php include('menu.php'); ?>
    </header>

      <section>
        <!--<div id="principal">-->
          <div id="capa_usuario">

            <?php
              $sql = 'select * from tbl_usuario where id_usuario = '.$id_usuario;

              $select=mysql_query($sql);
              while ($rs=mysql_fetch_array($select)) {
            //echo ($sql);


             ?>
            <div id="img_perfilUsuario">
              <img src="<?php echo($rs['foto_usuario']); ?>" alt="" id="img_perfil_usuario">
            </div>
            <div id="area_info_perfilUsuario">

              <p><?php echo($rs['nome_usuario']); ?></p>
              <p><?php echo($rs['telefone_usuario']); ?></p>
              <p><?php echo($rs['email_usuario']); ?></p>
              <p><?php echo($rs['cpf_usuario']); ?></p>
              <div id="area_opcoes_perfilUsuario">

                <a href="#editar_perfilUsuario" id="a_index_duvida" rel="modal_editar">
                  <p>Editar informações</p>

                  <img src="imagens/editar.png" alt="">
                </a>
              </div>

            </div>
            <div id="mtf_perfilUsuario">
              <p id="titulo_mtf_perfilUsuario">MILHAS TRAVEL FIDELIDADE</p>
              <div id="pontuacao_mtf_perfilUsuario">
                <img src="imagens/mtf.png" alt="">
                <p>000000</p>
              </div>
              <div id="duvida_mtf_perfilUsuario">
                <a href="#janela1" id="a_index_duvida" rel="modal"><p>O que é MTF?</p></a>
                <a href="#janela2" id="a_index_duvida" rel="modal"><p>Como adquirir?</p></a>
              </div>

            </div>
            <?php

             }

             ?>
          </div>
		  <div id="espaco_status">
			<p>MINHAS RESERVAS</p>
			<table id="status_table">
				<tr>
					<td class="campos_status_usuario">
						&nbsp;&nbsp;Hotel
					</td>
					<td class="campos_status_usuario">
						&nbsp;&nbsp;Lugar
					</td>
					<td  class="campos_status_usuario">
						&nbsp;&nbsp;Data da Reserva
					</td>
					<td  class="campos_status_usuario">
						&nbsp;&nbsp;Status
					</td>
					<td  class="campos_status_usuario">
						&nbsp;&nbsp;Mais informações
					</td>
				</tr>
        <?php
              //Incluindo o arquivo da controller para fazer o select
              require_once('controllers/reserva_usuario_controller.php');
              //Instancia do objeto de controller, e chamada dos metodos para listar os registros
              $controller_list_reserva = new controllerReserva();
              $rsReserva = $controller_list_reserva->listar();
              $cont=0;
              while ($cont<count($rsReserva)) {



        ?>
				<tr class="conteudo_status">
					<td>
						&nbsp;<?php echo($rsReserva[$cont]->nome_hotel);?>
					</td>
					<td>
						&nbsp;<?php echo($rsReserva[$cont]->cidade_descricao);?>
					</td>
					<td>
						&nbsp;<?php echo($rsReserva[$cont]->data_entrada);?>
					</td>
					<td>
						&nbsp;Reserva <?php echo($rsReserva[$cont]->status_reserva);?>
					</td>
					<td>
						<a href="#janela3" rel="modal"  id="a_index_duvida">
							<img class="icone_perfil_mais_status" src="imagens/mais.png" width="100%" height="100%"/>
							&nbsp;Detalhes
						</a>

					</td>
				</tr>
        <?php
          $cont+=1;

          }


        ?>
			</table>
		  </div>
          <div id="txt_perfilUsuario">
            <p>LUGARES POR ONDE VOCÊ PASSOU</p>
          </div>

          <div id="principal_produtos">
            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario">
                  <h1 class="txt_comentario"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>

            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada_comentario2" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario2">
                  <h1 class="txt_comentario"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>
            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada_comentario3" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario3">
                  <h1 class="txt_comentario"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>
            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada_comentario4" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario2">
                  <h1 class="txt_comentario4"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>
            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada_comentario5" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario5">
                  <h1 class="txt_comentario"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>
            <div class="produtos_div"  data-scroll-reveal="enter from the left after 0.3s, move 40px, over 2s">
              <img src="imagens/hotel2.jpg" alt="">
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
                <div id="area_comentario_perfilUsuario">
                    <a href="#" id="mostrar">
                    <button id="btn_pesquisa_avancada_comentario6" type="button" name="button" >
                    <img  id="img_filtro_comentario" src="imagens/cv.png" alt="dasd"></a></button>
                </div>
                <p class="txt_diaria_hotel" >Diárias a partir de</p>
                <p class="txt_rs" >R$</p>
                <p class="txt_preco_hotel">200</p>
                <input type="submit" name="btn_produto" value="ver novamente" class="btn_produto">
                <div id="comentario6">
                  <h1 class="txt_comentario"><p>FAÇA SEU COMENTARIO</p></h1>
                  <textarea name="txtobs" cols="39" rows="8" class="observacao"> </textarea>
                  <button type="button" class="button_editar_comentario ">ENVIAR
                     <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </div>

              </div>

            </div>

          </div>
      </section>

          <footer>
            <?php include('rodape.php'); ?>
          </footer>
  </body>
</html>
