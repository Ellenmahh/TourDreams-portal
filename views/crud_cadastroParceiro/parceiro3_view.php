<div id="principal">
<div id="seja_usuario">
<p> ALTERAR QUARTO </p>
</div>
<form  name="Cadastro_Parceiro" method="post" enctype="multipart/form-data" action="cadastroParceiro2.php">
<div id="espaco_cadastro_p2">

  <input  type="text" name="txtNome" placeholder="  Nome do quarto (ex: Suíte Presidencial)" class="input_cadastro_parceiroo"/>
  <input type="text" name="txtNumero"  placeholder=" N° do quarto" class="input_cadastro_parceiroo2"/>
  <div id="espaco_parceiroo_perguntas">
    <p>Quantidade de camas de solteiro: &nbsp;<input   type="text" name="txtNome" placeholder=" " class="input_cadastro_parceiroo3"/></p>
    <p>&nbsp;Quantidade de camas de casal: &nbsp;<input   type="text" name="txtNome" placeholder=" " class="input_cadastro_parceiroo3"/></p>
    <p> O que contém no quarto? </p>
    <div id="resp_parceiro2">
      <label class="control2 control--radio">
          <input type="checkbox" name="opt1_ar" value="ar_condicionado" />  Ar condicionado
          <div class="control__indicator2"></div>

        </label>
        <label class="control2 control--radio">
          <input type="checkbox" name="opt1_in" value="internet" />  Internet
          <div class="control__indicator2"></div>

        </label>
        <label class="control2 control--radio">
          <input type="checkbox" name="opt1_banheira" value="banheira_hidro" />  Banheira hidromassagem
          <div class="control__indicator2"></div>

        </label>
        <label class="control2 control--radio">
          <input type="checkbox" name="opt1_servico" value="servico_quarto" /> Serviços de quarto
          <div class="control__indicator2"></div>

        </label>
        <label class="control2 control--radio">
          <input type="checkbox" name="opt1_tv" value="televisao" /> Televisão
          <div class="control__indicator2"></div>

        </label>
        <label class="control2 control--radio">
          <input type="radio" name="opt1_acesso" value="acesso_cadeirantes" />  Acesso para cadeirantes
          <div class="control__indicator2"></div>

        </label>
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
