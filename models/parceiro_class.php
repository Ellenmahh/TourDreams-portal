<?php 
	class parceiro{
		public $id_hotel;
		public $nome_hotel;
		public $telefone_hotel;
		public $id_categoria;
		public $cnpj_hotel;
		public 	$imagem_hotel_1;
		public $imagem_hotel_2;
		public $btnAvancar;
		public $email_hotel;
		public $pais_hotel;
		public $estado_hotel;
		public 	$cidade_hotel;
		public 	$wi_fi;
		public 	$aceita_animais;
		public	$estacionamento;
		public $spa;
		public $pscina;
		public $academia;
		public $cafe_da_manha;
		public $almoco;
		public $cafe_da_tarde;
		public $jantar;
		public $endereco_hotel;
		public $CEP;
	}	
	
	
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
   public function Insert($parceiro){
		
   
   }
?>