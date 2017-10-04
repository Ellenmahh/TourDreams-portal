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
			public $numero_hotel;
			public $bairro_hotel;
			public $restaurante;
			public $nome_quarto;
			public $numero_quarto;
			public $camas_solteiro;
			public $camas_casal;
			public $id_carac_quarto;
			public $descricao_carac_quarto;
			
		  //metodo construtor
	  public function __construct(){

		  //incluir o arquivo de conexao
		  require_once('models/bd_class.php');
		  //cria uma instancia da classe mysql_db
		  $conexao_bd = new mysql_db();
		  //estabelece a conexao com BD
		  $conexao_bd->conectar();



	  }
		public function SelectCategoria(){
			$sql =" select * from tbl_categoria ";
			$select = mysql_query($sql);
			$cont = 0;

			while($rs=mysql_fetch_array($select)){

				$listCategoria[] = new parceiro;

				$listCategoria[$cont]->idCategoria=$rs['id_categoria'];
				$listCategoria[$cont]->nome_categoria=$rs['nome_categoria'];


				$cont+=1;
			}

			return $listCategoria;
		}
		public function SelectCategoriaQuarto(){
			$sql2="select * from caracteristicas_quarto";
			$select2 = mysql_query($sql2);
			$cont2 = 0;
			while($rsconsulta=mysql_fetch_array($select2)){
				$listCategoriaQuarto[] = new parceiro;
				$listCategoriaQuarto[$cont2]->id_carac_quarto=$rsconsulta['id_carac_quarto'];
				$listCategoriaQuarto[$cont2]->descricao_carac_quarto=$rsconsulta['descricao_carac_quarto'];
				
				$cont2 +=1;
			}
			return $listCategoriaQuarto;

		}
	  //metodo para inserir no banco
	   public function Insert($parceiro){
			  //Fazendo o select para verificar o email
		 $sql_verificaEmail = mysql_query("select * from tbl_hotel where email_hotel = '$parceiro->email_hotel'");

		 //Vendo se o email inserido já existe no BD
		 if(@mysql_num_rows($sql_verificaEmail) > 0){

			echo "<script> alert('E-mail já cadastrado!'); </script>";

		 }else {

				$sql ="insert into tbl_hotel(comentarios,nome_hotel,telefone_hotel,id_categora,cnpj,qtds_reserva_hotel,imagem_hotel_1,situacao_hotel,avaliação,email_hotel)
											values('nada','".$parceiro->nome_hotel."','".$parceiro->telefone_hotel."','".$parceiro->categoria_hotel."','".$parceiro->cnpj_hotel."',0,'".$parceiro->foto."','nada','nada','".$parceiro->email_hotel."')";



				//echo($sql);
				mysql_query($sql);

				


				//Pegando o ID do insert anterior
				$id_hotel = mysql_insert_id();

				$sql1="insert into tbl_caracteristicas_hotel(wifi,estacionamento,spa,piscina,academia,aceita_animais,restaurante,cafe_da_manha,almoco,cafe_da_tarde,jantar,id_hotel)
															values('".$parceiro->wi_fi_hotel."','".$parceiro->estacionamento_hotel."','".$parceiro->spa_hotel."','".$parceiro->pscina."',
															'".$parceiro->academia."','".$parceiro->aceita_animais."','".$parceiro->restaurante."','".$parceiro->cafe_da_manha."',
															'".$parceiro->almoco."','".$parceiro->cafe_da_tarde."','".$parceiro->jantar."','".$id_hotel."')";
			
				//echo($sql1);
				mysql_query($sql1);

				
			
			
			$sql2="insert into tbl_endereco_hotel(id_hotel,cidade_codigo,rua_hotel,bairro_hotel,numero_hotel)values('".$id_hotel."','".$parceiro->cidade_hotel."','".$parceiro->endereco_hotel."','".$parceiro
			->bairro_hotel."','".$parceiro->numero_hotel."')";
			
			$email = "";
			//echo($sql2);
			mysql_query($sql2);
			
				
			header('location:cadastroParceiro2.php?id_hotel='.$id_hotel.'');
			
			
			
			


		}
	}
	
	public function  InsertQuarto($parceiro){
	

		$sql3="insert into tbl_quarto(id_hotel,nome_quarto,numero_quarto,camas_solteiro,camas_casal,preco_quarto)values('".$parceiro->id_hotel."','".$parceiro->nome_quarto."','".$parceiro->numero_quarto."','".$parceiro->camas_solteiro."','".$parceiro->camas_casal."','".$parceiro->preco_quarto."')";
		
		//echo($sql3);
		mysql_query($sql3);

	}
  }
?>
