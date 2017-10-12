


<?php 
	$id_quarto=""; 
	//$id_hotel=$_GET['id_hotel'];
?>

<form  name="perfil_Parceiro" method="GET" enctype="multipart/form-data" action="editarQuarto.php">
				
				<div id="principal_produtos">
				<?php
						 require_once('controllers/hotel_controller.php');
						 
						$hotel_controller = new ControllerHotel();
						
						 $rsconsulta1= $hotel_controller->ListarQuartos();

						$cont3 = 0;
						
					
						
						while($cont3<count($rsconsulta1)){
							
		
				?>
						 
								<div class="produtos_div_verQuartos">
									<a href="editarQuarto.php"><img class="img_hotel" src="<?php echo($rsconsulta1[$cont3]->nome_imagem); ?>" alt=""></a>
									<div class="legenda_produto_verQuartos">
										<p class="txt_nome_hotel"><?php echo($rsconsulta1[$cont3]->nome_quarto); ?> N° <?php echo($rsconsulta1[$cont3]->numero_quarto); ?></p>
										<!--<div class="caracteristicas_verQuartos">
											<img class="img_caracteristicas_verQuartos" src="imagens/wifi.png" alt="">
										</div>-->
										<p class="txt_caracteristica_verQuartos"><?php echo($rsconsulta1[$cont3]->descricao_carac_quarto); ?><p>
										<p class="txt_diaria_hotel">Diárias a partir de </p>
										<p class="txt_rs" style="color:#000000;">R$ </p>
										<p class="txt_preco_hotel" style="color:#000000;"><?php echo($rsconsulta1[$cont3]->preco_quarto); ?></p>
										<a href="editarQuarto.php?modo=BuscarInfoQuarto&id_quarto=<?php echo($rsconsulta1[$cont3]->id_quarto); ?>"><p class="btn_produto_verQuartos"> Editar</p></a>

									</div>

								</div>
					<?php 
						$cont3+=1;

						}
					?>
				</div>

				<!--</li>
			</ul>-->

			<!--<div class="produtos_div_verQuartos">
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