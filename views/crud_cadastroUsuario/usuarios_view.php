<?php

$id_usuario = "";
$nome_usuario = "";
$cpf_usuario = "";
$rg_usuario = "";
$email_usuario = "";
$senha_usuario = "";
$telefone_usuario = "";
$celular_usuario = "";
$foto_usuario = "";
$qtds_reserva_usuario = "";
$endereco_usuario = "";
$senha_usuario = "";
$btn_usuario = "ENVIAR";

$action = "novo";


 ?>

<form name="Cadastro_usu" method="post" enctype="multipart/form-data" action="router.php?controller=usuarios&modo=<?php echo($action) ?>">
   <div id="espaco_cadastro_usuario">
     <input placeholder=" Nome" type="text" name="nome_usuario" value="<?php echo($nome_usuario) ?>" class="input_cadastro_usu" required>
     <input placeholder=" E-mail" type="text" name="email_usuario" value="<?php echo($email_usuario) ?>" class="input_cadastro_usu" required>
     <select name="slcPais" class="option_cadastro">
       <option name="pais" > &nbsp;Pais </option>
     </select>
     <select name="slcEstado" class="option_cadastro">
       <option name="estado" > &nbsp;Estado </option>
     </select>
     <select name="slcCidade" class="option_cadastro">
       <option name="cidade" >   &nbsp;Cidade </option>
     </select>
     <input placeholder=" Endereço" type="text" name="endereco_usuario" value="<?php echo($endereco_usuario) ?>" class="input_cadastro_usu" required>
     <input placeholder=" Telefone" type="text" name="telefone_usuario" value="<?php echo($telefone_usuario) ?>" class="input_cadastro_usu" required>
     <input placeholder=" Celular" type="text" name="celular_usuario" value="<?php echo($celular_usuario) ?>" class="input_cadastro_usu" required>
     <input placeholder=" CPF" type="text" name="cpf_usuario" value="<?php echo($cpf_usuario) ?>" class="input_cadastro_usu" required>

   </div>
   <div id="espaco_cadastro_usuario">
     <input placeholder=" RG" type="text" name="rg_usuario" value="<?php echo($rg_usuario) ?>" class="input_cadastro_usu" required>
     <input placeholder=" Senha" type="text" name="senha_usuario" value="<?php echo($senha_usuario) ?>" class="input_cadastro_usu" required>
     <div id="foto_cadastro_usuario">
       <img src="imagens/usuario.png" width="100%" height="98%"/>
     </div>
     <div id="espacoBotao_enviarfile">
       <label id="escolha_foto_usu_label"for='filefotousuario'>Escolha uma foto </label>
       <input type="file" name="foto_usuario" id="filefotousuario"/>
     </div>

   </div>
   <input type="submit" name="btnCadastrar" value="<?php echo($btn_usuario) ?>" id="botao" style="<?php echo($style_btn) ?>" class="btn_enviar_cadastrousu">
</form>
