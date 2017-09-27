
<!DOCTYPE html>

<html>
  <head>
    <?php

		include('head.php');
	
					
		if(isset($_POST['arquivos[]'])){			
			$i = 0;

			foreach ($_FILES["arquivos"]["error"] as $key => $error) {
							  
					# Definir o diretório onde salvar os arquivos.
					$destino = "imagens/" . $_FILES["arquivos"]["name"][$i];
					
					#Move o arquivo para o diretório de destino
					move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i], $destino );

					#Próximo arquivo a ser analisado
					$i++;
			}
		}
		
		
	
	?>
	
	<script type="text/javascript">
                $(function(){
                      $('#uploadChange').on('change',function() {
						    var id = $(this).attr('id');
							var totalFiles = $(this).get(0).files.length;
							
						

							var htm='<ol>';
							for (var i=0; i < totalFiles; i++) {
                               var c = (i % 2 == 0) ? 'item_white' : 'item_grey';
                               var arquivo = $(this).get(0).files[i];
                               var fileV = new readFileView(arquivo, i);
                               htm +='<li class="+c+"><img class="img_parceiro_cadastro2" data-img="'+i+'" data-id="'+id+'" border="1"><span>'+"</li>";
							}
                          htm += '</ol>';

                        
                             $('.img_parceiro_cadastro2').html(htm);

                      });

                    });
					
					
                    function readFileView(file, i) {

                      var reader = new FileReader();
                       reader.onload = function (e) {
                         $('[data-img="'+i+'"]').attr('src', e.target.result);
                    }

                      reader.readAsDataURL(file);
                    }
					

					
										

	</script>

  </head>
  <body>
	  <header>
		  <?php include('menu.php'); ?>
	  </header>
   </body>
    <section>
	
      <div id="principal">
	  	<div id="seja_usuario">
			<p>ADIOCIONE UM QUARTO </p>
		</div>
		<form  name="Cadastro_Parceiro" method="post" enctype="multipart/form-data" action="cadastroParceiro2.php">
			<div id="espaco_cadastro_p2">
			
				<input  type="text" name="txtNome" placeholder="  Nome do quarto (ex: Suíte Presidencial)" class="input_cadastro_parceiroo"/>
				<input type="text" name="txtNumero"  placeholder=" N° do quarto" class="input_cadastro_parceiroo2"/>
				<div id="espaco_parceiroo_perguntas">
					<p>Quantidade de camas de solteiro: &nbsp;<input   type="text" name="txtNome" placeholder=" " class="input_cadastro_parceiroo3"/></p>
					<p>&nbsp;Quantidade de camas de solteiro: &nbsp;<input   type="text" name="txtNome" placeholder=" " class="input_cadastro_parceiroo3"/></p>
					<p> Oque contém no quarto? </p>
					<div id="resp_parceiro2">
						<p><input type="radio" name="opt1_ar" value="ar_condicionado" class="radio_p2"/> &nbsp; Ar condicionado   </p>
						<p> &nbsp; &nbsp; &nbsp;<input type="radio" name="opt1" value="internet" class="radio_p2"/> &nbsp; Internet   </p>
						<p> &nbsp; &nbsp;<input  type="radio" name="opt1_banheira" value="banheira_hidro" class="radio_p2"/> &nbsp; Banheira de Hidromassagem   </p>
						<p><input type="radio" name="opt1_servico" value="ar_servicoquarto" class="radio_p2"/> &nbsp; Serviços de quarto  </p>
						<p> &nbsp;<input type="radio" name="opt1_tv" value="televisao" class="radio_p2"/> &nbsp; Televisão  </p>
						<p> &nbsp;<input type="radio" name="opt1_acessp" value="acesso_cadeirantes" class="radio_p2"/> &nbsp; Acesso para cadeirantes </p>
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
		<p><a href="cadastroParceiro3.php"><input type="submit" class="btn_avanca_parceiro" value="Finalizar" name="btnFinalizar"/></a></p>
		
	  </div>
	  
	</section>
   <footer>
		<?php include('rodape.php'); ?>
	</footer>
</html>