<?php
class ControllerQuarto {

	public function NovoQuarto(){
			if($_SERVER['REQUEST_METHOD']=='POST')
      {
				$nome_quarto=$_POST['txtNome'];
				$numero_quarto=$_POST['txtNumero'];
				$camas_solteiro=$_POST['txtCamas'];
				$camas_casal=$_POST['txtCamasCasal'];

				$preco_quarto=$_POST['txtPreco'];
				$id_hotel=$_GET['id_hotel'];
				$vetor_imagem_quarto = $_FILES['arquivos2'];
				$i2= 0;
				$quarto_controller = new quarto();

				$quarto_controller->nome_quarto=$nome_quarto;
			  $quarto_controller->numero_quarto=$numero_quarto;
			  $quarto_controller->camas_solteiro=$camas_solteiro;
			  $quarto_controller->camas_casal=$camas_casal;
			  $quarto_controller->preco_quarto=$preco_quarto;
			  $quarto_controller->id_hotel=$id_hotel;

				$id_quarto = $quarto_controller->InsertQuarto($quarto_controller);

				 //foreach ($_FILES["arquivos2"]["error"] as $key => $error) {



				for($i2 = 0; $i2 < sizeof($_FILES['arquivos2']["name"]); $i2++){

				 	 $destino = "arquivos_parceiro/".$_FILES["arquivos2"]["name"][$i2];

				 	 move_uploaded_file( $_FILES["arquivos2"]["tmp_name"][$i2], $destino);

					 $quarto_controller = new quarto();
					 $quarto_controller->InsertImagemQuarto($id_quarto , $destino);

				 }


			/*	foreach ($_FILES["arquivos2"]["error"] as $key => $error) {

				 $destino = "arquivos_parceiro/".$_FILES["arquivos2"]["name"]
				[$i2];

				 move_uploaded_file( $_FILES["arquivos2"]["tmp_name"][$i2],

				 $destino);

				  $quarto_controller = new quarto();
					$quarto_controller->foto_quarto=$destino;



			     $id_quarto=-1;


     				// $quarto_controller->InsertImagem($quarto_controller);

					$i2++;

				}

				$quarto_controller->fotos=$vetorImagens;
				$quarto_controller->InsertQuarto($quarto_controller);
				*/
				$vetor_carac = $_POST['optC'];
				//var_dump($_POST['optC']);

				for($i3 = 0; $i3 < sizeof($vetor_carac); $i3++){
				$id_carac_quarto=$vetor_carac[$i3];

				$quarto_controller_carac = new quarto();

				 $quarto_controller_carac->id_carac_quarto=$id_carac_quarto;

				 $quarto_controller_carac->InsertCaracQuarto( $id_quarto, $id_hotel);

				 //parceiro::InsertCaracQuartoT($hotel_controller_carac,$id_quarto );




				}

				header('location:cadastroParceiro3.php?id_hotel='.$id_hotel.'');



			}
    }


	public function ListarQuartos($id_hotel){

			require_once('models/quarto_class.php');
			$listQuartos = new quarto;

			return $listQuartos -> SelectQuartos($listQuartos,$id_hotel);

		}
	public function ListarCategoriaQuarto(){

			require_once('models/quarto_class.php');
			$listCategoriaQuarto = new quarto;

			return $listCategoriaQuarto -> SelectCategoriaQuarto();
	}

	public function BuscarInfoQuarto(){

			require_once('models/quarto_class.php');
			$id_quarto=$_GET['id_quarto'];
			$quarto_controller = new quarto;
			$quarto_controller->id_quarto=$id_quarto;



			return $quarto_controller -> BuscarInfoQuarto($quarto_controller);
			/*if($_SERVER['REQUEST_METHOD'] == 'GET'){


				$id_quarto=$_GET['id_quarto'];
				$hotel_controller = new parceiro();

				 $hotel_controller->id_quarto=id_quarto;

			    $listEditar=$hotel_controller->BuscarInfoQuarto( $hotel_controller);
				echo json_encode($listEditar);

			}*/

	}



	public function BuscarInfoQuartoImagens(){

			require_once('models/quarto_class.php');
			$id_quarto=$_GET['id_quarto'];
			$quarto_controller = new quarto;
			$quarto_controller->id_quarto=$id_quarto;



			return $quarto_controller -> BuscarInfoQuartoImagens($quarto_controller,$id_quarto);
	}
}
?>
