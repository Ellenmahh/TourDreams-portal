<?php

	class quarto {
			public $nome_quarto;
			public $numero_quarto;
			public $camas_solteiro;
			public $camas_casal;
			public $id_carac_quarto;
			public $descricao_carac_quarto;
			public $senha_hotel;
			public $id_quarto;
			public $id_hotel;

      public function __construct(){

        //incluir o arquivo de conexao
        require_once('models/bd_class.php');
        //cria uma instancia da classe mysql_db
        $conexao_bd = new mysql_db();
        //estabelece a conexao com BD
        $conexao_bd->conectar();



      }

		public function BuscarInfoQuarto($quarto){
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
			where q.id_quarto=$quarto->id_quarto";
		//echo($sqlq0);
		 $select = mysql_query($sqlq0);
			while($rsconsulta0=mysql_fetch_array($select)){

				$listEditar = new quarto;

				$listEditar->id_quarto=$rsconsulta0['id_quarto'];
				$listEditar->id_hotel=$rsconsulta0['id_hotel'];
				$listEditar->nome_quarto=$rsconsulta0['nome_quarto'];
				$listEditar->numero_quarto=$rsconsulta0['numero_quarto'];
				$listEditar->camas_solteiro=$rsconsulta0['camas_solteiro'];
				$listEditar->camas_casal=$rsconsulta0['camas_casal'];
				$listEditar->id_carac_quarto=$rsconsulta0['id_carac_quarto'];
				$listEditar->descricao_carac_quarto=$rsconsulta0['descricao_carac_quarto'];


			}
			return $listEditar;
			//header('location:editarQuarto.php?id_quarto='.$id_quarto.'');*/

	  }
		public function BuscarInfoQuartoImagens($quarto,$id_quarto){
			$sql_imagens_quarto ="select * from tbl_imagens_quarto where id_quarto=".$id_quarto;
			//echo($sql_imagens_quarto);
		$select_imagem = mysql_query($sql_imagens_quarto);
		$cont_imagem = 0;
		$listEditar_imagem="";
			while($rsconsultaimagens=mysql_fetch_array($select_imagem)){
					$listEditar_imagem [] = new quarto;

					$listEditar_imagem[$cont_imagem]->id_quarto=$rsconsultaimagens['id_quarto'];
					$listEditar_imagem[$cont_imagem]->id_imagem_quarto=$rsconsultaimagens['id_imagem_quarto'];
					$listEditar_imagem[$cont_imagem]->nome_imagem=$rsconsultaimagens['nome_imagem'];

					$cont_imagem +=1;
			}
				return $listEditar_imagem;
			}




	  public function SelectQuartos($quarto,$id_hotel){
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
			where q.id_hotel=".$id_hotel;

		 //echo($sqlq);
		  $select3 = mysql_query($sqlq);
		  $cont3 = 0;
			$listQuartos="";
			while($rsconsulta1=mysql_fetch_array($select3)){

				$listQuartos[] = new quarto;

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
	  public function  InsertQuarto($quarto){


		$sql3="insert into tbl_quarto(id_hotel,nome_quarto,numero_quarto,camas_solteiro,camas_casal,preco_quarto)values('".$quarto->id_hotel."','".$quarto->nome_quarto."','".$quarto->numero_quarto."','".$quarto->camas_solteiro."','".$quarto->camas_casal."','".$quarto->preco_quarto."')";

		//echo($sql3);
		mysql_query($sql3);

		$id_quarto = mysql_insert_id();
    $id_quarto_insert = '';
    return $id_quarto;


  }
  public function InsertImagemQuarto($id_quarto, $destino){
		$sql5="insert into tbl_imagens_quarto(id_quarto,nome_imagem)values('".$id_quarto."','".$destino."')";
	   mysql_query($sql5);
  }

	  public function InsertCaracQuarto( $id_quarto, $id_hotel){


		$sql4="insert into caracteristicas_quarto_hotel(id_carac_quarto, id_quarto)values('".$this->id_carac_quarto."','".$id_quarto."')";

      // echo($sql4);
    mysql_query($sql4);
	  //header('location:cadastroParceiro3.php?id_hotel='.$id_hotel.'');





	  }
	  public function SelectCategoriaQuarto(){
			$sql2="select * from caracteristicas_quarto;";
			//echo($sql2);

			$select2 = mysql_query($sql2) or die(mysql_error());;
			$cont2 = 0;
			while($rsconsulta=mysql_fetch_array($select2)){
				$listCategoriaQuarto[] = new quarto;
				$listCategoriaQuarto[$cont2]->id_carac_quarto=$rsconsulta['id_carac_quarto'];
				$listCategoriaQuarto[$cont2]->descricao_carac_quarto=$rsconsulta['descricao_carac_quarto'];

				$cont2 +=1;
			}
			return $listCategoriaQuarto;



		}
	}
?>
