<?php

	 $listEditar="";

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
			public $senha_hotel;
			public $id_quarto;
			/*public $nome_quarto;
			public $numero_quarto;*/
			//metodo construtor
	  public function __construct(){

		  //incluir o arquivo de conexao
		  require_once('models/bd_class.php');
		  //cria uma instancia da classe mysql_db
		  $conexao_bd = new mysql_db();
		  //estabelece a conexao com BD
		  $conexao_bd->conectar();



	  }
	  public function BuscarInfoQuarto($parceiro){
		$sqlq0 = "select q.id_quarto,q.id_hotel,q.nome_quarto, q.numero_quarto,
			q.camas_solteiro, q.camas_casal, q.preco_quarto, ch.id_carac_quarto,ch.id_quarto,
			c.id_carac_quarto,c.descricao_carac_quarto,i.id_quarto,i.nome_imagem
			from tbl_quarto  as q 
			Join caracteristicas_quarto_hotel as ch
			ON q.id_quarto = ch.id_quarto 
			JOIN tbl_imagens_quarto as i
			ON i.id_quarto = q.id_quarto
			JOIN caracteristicas_quarto as c
			ON ch.id_carac_quarto = c.id_carac_quarto
			where q.id_quarto=$parceiro->id_quarto";
		 //echo($sqlq0);
		 $select31 = mysql_query($sqlq0);
		$cont= 0;
			while($rsconsulta0=mysql_fetch_array($select31)){
				
				
				
				$listEditar[] = new parceiro;


				$listEditar[$cont]->id_quarto=$rsconsulta0['id_quarto'];
				$listEditar[$cont]->id_hotel=$rsconsulta0['id_hotel'];
				$listEditar[$cont]->nome_quarto=$rsconsulta0['nome_quarto'];
				$listEditar[$cont]->numero_quarto=$rsconsulta0['numero_quarto'];
				$listEditar[$cont]->camas_solteiro=$rsconsulta0['camas_solteiro'];
				$listEditar[$cont]->camas_casal=$rsconsulta0['camas_casal'];
				$listEditar[$cont]->id_carac_quarto=$rsconsulta0['id_carac_quarto'];
				$listEditar[$cont]->descricao_carac_quarto=$rsconsulta0['descricao_carac_quarto'];
				$listEditar[$cont]->nome_imagem=$rsconsulta0['nome_imagem'];

				$cont+=1;
			}
			
			
			return $listEditar;
			//header('location:editarQuarto.php?id_quarto='.$id_quarto.'');*/
	  } 
	  public function SelectQuartos(){
		  $sqlq = "select q.id_quarto,q.id_hotel,q.nome_quarto, q.numero_quarto,
			q.camas_solteiro, q.camas_casal, q.preco_quarto, ch.id_carac_quarto,ch.id_quarto,
			c.id_carac_quarto,c.descricao_carac_quarto,i.id_quarto,i.nome_imagem
			from tbl_quarto  as q 
			Join caracteristicas_quarto_hotel as ch
			ON q.id_quarto = ch.id_quarto 
			JOIN tbl_imagens_quarto as i
			ON i.id_quarto = q.id_quarto
			JOIN caracteristicas_quarto as c
			ON ch.id_carac_quarto = c.id_carac_quarto
			where q.id_hotel=44";
		
		 //echo($sqlq);
		  $select3 = mysql_query($sqlq);
		  $cont3 = 0;
			$listQuartos="";
			while($rsconsulta1=mysql_fetch_array($select3)){

				$listQuartos[] = new parceiro;

				$listQuartos[$cont3]->id_quarto=$rsconsulta1['id_quarto'];
				$listQuartos[$cont3]->id_hotel=$rsconsulta1['id_hotel'];
				$listQuartos[$cont3]->nome_quarto=$rsconsulta1['nome_quarto'];
				$listQuartos[$cont3]->numero_quarto=$rsconsulta1['numero_quarto'];
				$listQuartos[$cont3]->camas_solteiro=$rsconsulta1['camas_solteiro'];
				$listQuartos[$cont3]->camas_casal=$rsconsulta1['camas_casal'];
				$listQuartos[$cont3]->preco_quarto=$rsconsulta1['preco_quarto'];
				$listQuartos[$cont3]->id_carac_quarto=$rsconsulta1['id_carac_quarto'];
				$listQuartos[$cont3]->descricao_carac_quarto=$rsconsulta1['descricao_carac_quarto'];
				$listQuartos[$cont3]->nome_imagem=$rsconsulta1['nome_imagem'];


				$cont3 +=1;
			}
			return $listQuartos;

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

				$sql ="insert into tbl_hotel(comentarios,nome_hotel,telefone_hotel,id_categora,cnpj,qtds_reserva_hotel,imagem_hotel_1,situacao_hotel,avaliação,email_hotel,senha_hotel)
											values('nada','".$parceiro->nome_hotel."','".$parceiro->telefone_hotel."','".$parceiro->categoria_hotel."','".$parceiro->cnpj_hotel."',0,'".$parceiro->foto."','nada','nada','".$parceiro->email_hotel."','".$parceiro->senha."')";



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
		return $id_hotel;

		$id_quarto = mysql_insert_id();

	
		$sql5="insert into tbl_imagens_quarto(id_quarto,nome_imagem)values('".$id_quarto."','".$parceiro->foto_quarto."')";
		//echo($sql5);
		mysql_query($sql5);

	
		return $id_quarto;
		//header('location:cadastroParceiro3.php?id_hotel='.$parceiro->id_hotel.'');

		

	}
	
	public function InsertCaracQuarto( $id_quarto, $id_hotel){
		
		
		$sql4="insert into caracteristicas_quarto_hotel(id_carac_quarto, id_quarto)values('".$this->id_carac_quarto."','".$id_quarto."')";
		
       // echo($sql4);
        mysql_query($sql4);
		//	header('location:cadastroParceiro3.php?id_hotel='.$id_hotel.'');

	
	

		
	}
	
	/*public static function InsertCaracQuartoT($parceiro, $id_quarto){
		
		
		$sql4="insert into tbl_caracteristicas_quarto_hotel(id_carac_quarto, id_quarto)values('".$parceiro->id_carac_quarto."','".$id_quarto."')";
		echo($sql4);
				
		
	}*/
	
  }
?>
