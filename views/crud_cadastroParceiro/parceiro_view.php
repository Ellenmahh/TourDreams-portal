<?php 
	$id_hotel="";
	$nome_hotel="";
	$telefone_hotel="";
	$id_categoria="";
	$cnpj_hotel="";
	$imagem_hotel_1="";
	$imagem_hotel_2="";
	$btnAvancar="";
	$email_hotel="";
	$pais_hotel="";
	$estado_hotel="";
	$cidade_hotel="";
	$wi_fi="";
	$aceita_animais="";
	$estacionamento="";
	$spa="";
	$pscina="";
	$academia="";
	$cafe_da_manha="";
	$almoco="";
	$cafe_da_tarde="";
	$jantar="";
	$endereco_hotel="";
	$CEP = "";
	
?>

<form name="Cadastro_parceiro" method="post" enctype="multipart/form-data" action="cadastroParceiro2.php">

			<div id="espaco_cadastro_p1">
				<input type="text" name="txtNomeHotel" placeholder="  Nome do hotel " class="input_cadastro_parceiro" value="<?php echo($nome_hotel); ?>"/>
				<input type="text" name="txtEmail" placeholder="  E-mail " class="input_cadastro_parceiro" value="<?php echo($email_hotel); ?>"/>
				<select name="slcPais" class="option_cadastro2" value="<?php echo($pais_hotel); ?>" >
					<option name="pais"  > &nbsp;Pais </option>
				</select>
				<input type="text" name="txtCEP" value="<?php echo($CEP); ?>" placeholder="  CEP " class="input_cadastro_parceiro2"/>
				<select name="slcEstado" class="option_cadastro2" value="<?php echo($estado_hotel); ?>">
					<option name="Estado" > &nbsp;Estado </option>
				</select>
				<select name="slcCidade" class="option_cadastro2" value="<?php echo($cidade_hotel); ?>">
					<option name="Cidade"  > &nbsp;Cidade </option>
				</select>

				<input type="text" name="txtCNPJ" placeholder="  CNPJ" class="input_cadastro_parceiro"  value="<?php echo($cnpj_hotel); ?>"/>
				<input type="text" name="txtEndereco" placeholder="  Endereço" class="input_cadastro_parceiro" value="<?php echo($endereco_hotel); ?>"/>

			</div>
			<table id="espaco_cadastro_p3" border="0">
				<tr>
					<td class="espaco_perguntas">
						<p class="mais_espaco_p">Nos ajude, seu hotel pertence a qual dessas opções?</p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt" value="praia" class="radio_p" value="<?php echo($id_categoria); ?>"/>  Praia</p>
							<p><input type="radio" name="opt" value="inverno" class="radio_p" value="<?php echo($id_categoria); ?>"/>  Inverno</p>
							<p><input  type="radio" name="opt" value="campo" class="radio_p" value="<?php echo($id_categoria); ?>"/>  Campo</p>
							<p><input type="radio" name="opt" value="fazenda" class="radio_p" value="<?php echo($id_categoria); ?>"/>  Fazenda</p>
						</div>
					</td>
				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Seu Hotel possuí Wi-Fi?</p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt2"  value="<?php echo($wi_fi); ?>" class="radio_p" />  Sim</p>
							<p><input type="radio" name="opt2" value="<?php echo($wi_fi); ?>" class="radio_p"/>  Não</p>

						</div>
					</td>
				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Permite animais estimações? </p>
						<div class="resposta_opt_p">
							<p><input   type="radio" name="opt3" value="<?php echo($aceita_animais); ?>" class="radio_p"/>  Sim</p>
							<p><input type="radio" name="opt3" value="<?php echo($aceita_animais); ?>"class="radio_p"/>  Não</p>

						</div>
					</td>
				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Possuí estacionamento? </p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt4" value="<?php echo($estacionamento); ?>" class="radio_p"/>  Sim</p>
							<p><input  type="radio" name="opt4" value="<?php echo($estacionamento); ?>" class="radio_p"/>  Não</p>

						</div>
					</td>
				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Possuí SPA? </p>
						<div class="resposta_opt_p">
							<p><input type="radio" name="opt5" value="<?php echo($spa); ?>" class="radio_p"/>  Sim</p>
							<p><input type="radio" name="opt5" value="<?php echo($spa); ?>" class="radio_p"/>  Não</p>

						</div>
					</td>
				</tr>
			</table>
			<table id="espaco_cadastro_p4" border="0">
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Tem piscina? </p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt6" value="<?php echo($pscina); ?>" class="radio_p"/>  Sim</p>
							<p><input  type="radio" name="opt6" value="<?php echo($pscina); ?>" class="radio_p"/>  Não</p>

						</div>
					</td>

				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Tem academia? </p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt7" value="<?php echo($academia); ?>" class="radio_p"/>  Sim</p>
							<p><input type="radio" name="opt7" value="<?php echo($academia); ?>" class="radio_p"/>  Não</p>

						</div>
					</td>

				</tr>
				<tr>
					<td class="espaco_perguntas">
						<p class="espaco_p_cadastro">Quais refeições estão inclusas? </p>
						<div class="resposta_opt_p">
							<p><input  type="radio" name="opt8_c" value="<?php echo($cafe_da_manha); ?>" class="radio_p"/>  Café   </p>
							<p><input type="radio" name="opt8_a" value="<?php echo($almoco); ?>" class="radio_p"/>  Almoço</p>
							<p><input  type="radio" name="opt8_l" value="<?php echo($cafe_da_tarde); ?>" class="radio_p"/>  Lanche</p>
							<p><input  type="radio" name="opt8_j" value="<?php echo($jantar); ?>" class="radio_p"/>  Jantar</p>


						</div>
					</td>

				</tr>
				<tr>
					<td class="espaco_perguntas_img">

						<p  class="mais_espaco_p">Adicione fotos do seu hotel: (Selecione apenas duas imagens) </p>

						<div class="img_parceiro_cadastro2">

						</div>
						<div class="img_parceiro_cadastro22">
							 <label name="addquartoo" class="addquartoo" for='uploadChange'><img src="imagens/addMais.png" width="90%" height="90%"/> </label>
							 <input type="file" name="arquivos[]" multiple="multiple" id="uploadChange" />
						</div>

					</td>
				</tr>
				<tr>
					<td class="espaco_perguntas">
						<input type="submit" name="btnAvancar"  value = "AVANÇAR" class="btn_avanca_parceiro"/>


					</td>
				</tr>
			</table>
		</form>