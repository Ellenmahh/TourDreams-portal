<?php
	$id_quarto = $_GET['id_quarto'];
	

 ?>

<div id="principal">
	<div id="seja_usuario">
	<p> ALTERAR QUARTO </p>
	</div>
	<form  name="Cadastro_Parceiro" method="GET" enctype="multipart/form-data" action="cadastroParceiro2.php">
	<div id="espaco_cadastro_p2">
		<?php 
			require_once('controllers/hotel_controller.php');
			$hotel_controller = new ControllerHotel();

			$rsconsulta0 = $hotel_controller->BuscarInfoQuarto();
			/*while($rsconsulta0=mysql_fetch_array($select)){
			{*/

		 ?>
			  <input  type="text" name="txtNome" placeholder="  Nome do quarto (ex: Suíte Presidencial)" class="input_cadastro_parceiroo" value="<?php echo($rsconsulta0->nome_quarto); ?>"/>
			  <input type="text" name="txtNumero"  placeholder=" N° do quarto" class="input_cadastro_parceiroo2" value="<?php echo($rsconsulta0->numero_quarto); ?>"/>
			  <div id="espaco_parceiroo_perguntas">
				<p>Quantidade de camas de solteiro: &nbsp;<input   type="text" name="txtCamasSolteiro" placeholder=" " class="input_cadastro_parceiroo3" value="<?php echo($rsconsulta0->camas_solteiro); ?>"/></p>
				<p>&nbsp;Quantidade de camas de casal: &nbsp;<input   type="text" name="txtCamasCasal" placeholder=" " class="input_cadastro_parceiroo3" value="<?php echo($rsconsulta0->camas_casal); ?>"/></p>
				<p> O que contém no quarto? </p>
				<div id="resp_parceiro2">
		
		 <?php
		    
			require_once('controllers/hotel_controller.php');
			$hotel_controller = new ControllerHotel();

			$rsconsulta = $hotel_controller->ListarCategoriaQuarto();
			
			$cont2 = 0;
			while($cont2<count($rsconsulta)){
		?>
										<label class="control2 control--checkbox"> 
											<input type="checkbox" name="optC[]" value="<?php echo($rsconsulta[$cont2]->id_carac_quarto); ?>" /> 
											<?php echo($rsconsulta[$cont2]->descricao_carac_quarto); ?>
											<div class="control__indicator2"></div>

										</label>
		<?php
				$cont2+=1;
										 
												
							
			}	
		?>
		</div>
		<p>&nbsp;Adicione fotos do quarto:</p>
		<div id="espaco_fotos_parceiro_cadastro">

			<div class="img_parceiro_cadastro2">

			</div>

		  <div class="img_parceiro_cadastro22">
			  <label name="addquartoo" class="addquartoo" for='uploadChange'><img src="imagens/addMais.png" width="90%" height="90%"/> </label>
			   <input type="file" name="arquivos[]" multiple="multiple" id="uploadChange" />
		  </div>
		</div>
	  </div>


	</div>


	</form>
	<p><input type="submit" class="btn_avanca_parceiro" value="ALTERAR" name="btnAlterar"/></p>

</div>
