<?php

class cadastroUsuario{

  public $id_usuario;
  public $nome_usuario;
  public $cpf_usuario;
  public $rg_usuario;
  public $email_usuario;
  public $telefone_usuario;
  public $celular_usuario;
  public $qtds_reserva_usuario;
  public $endereco_usuario;
  public $senha_usuario;
  public $btn_usuario;

  public $foto_usuario;


  //metodo construtor
  public function __construct(){

      //incluir o arquivo de conexao
      require_once('models/bd_class.php');
      //cria uma instancia da classe mysql_db
      $conexao_bd = new mysql_db();
      //estabelece a conexao com BD
      $conexao_bd->conectar();



  }

  //metodo para inserir no banco
   public function Insert($usuario){

      $sql ="insert into tbl_usuario (nome_usuario, cpf_usuario, rg_usuario, email_usuario, senha_usuario, telefone_usuario, celular_usuario)
                                      values('".$usuario->nome_usuario."', '".$usuario->cpf_usuario."', '".$usuario->rg_usuario."',
                                      '".$usuario->email_usuario."','".$usuario->senha_usuario."','".$usuario->telefone_usuario."','".$usuario->celular_usuario."')";

      if (mysql_query($sql)){
        header('location:cadastroUsuario.php');

      }else{
        echo('Não foi possivel conectar-se ao banco!  ');

      }

      echo($sql);

  }


}

?>
