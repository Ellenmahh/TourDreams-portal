<?php

    class ControllerHotel{

        //Metodo Inserir Novo Registro
        public function Novo(){
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
				
				
				$nome_hotel=$_POST['txtNomeHotel'];
				$email_hotel=$_POST['txtEmail'];

				$CEP = $_POST['txtCEP'];
				$estado_hotel= $_POST['cb_estado'];
				$cidade_hotel = $_POST['cb_cidade'];
				$cnpj_hotel = $_POST['txtCNPJ'];
				$endereco_hotel= $_POST['txtEndereco'];
				$id_categoria=$_POST['opt'];
				$wi_fi=$_POST['opt2'];
				$aceita_animais=$_POST['opt3'];
				$estacionamento=$_POST['opt4'];
				$spa=$_POST['opt5'];
				$pscina=$_POST['opt6'];
				$academia=$_POST['opt7'];
				$restaurante=$_POST['opt71'];
				$senha_hotel=$_POST['txtSenha'];
				$cafe_da_manha=$_POST['opt8'];
				$almoco=$_POST['opt9'];
				$cafe_da_tarde=$_POST['opt10'];
				$jantar=$_POST['opt11'];
				$telefone_hotel=$_POST['txtTelefone'];
				$bairro_hotel=$_POST['txtBairro'];
				$numero_hotel=$_POST['txtNumeroHotel'];
				
				$i = 0;
				
				foreach ($_FILES["arquivos"]["error"] as $key => $error) {

				 $destino = "arquivos_parceiro/".$_FILES["arquivos"]["name"]
				[$i];

				 move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i],

				 $destino);
				 
					$hotel_controller = new parceiro();

					 $hotel_controller->nome_hotel=$nome_hotel;
					 $hotel_controller->email_hotel=$email_hotel;
					 /*$hotel_controller->pais_hotel=$pais_hotel;*/
					 $hotel_controller->cep_hotel=$CEP;
					 $hotel_controller->estado_hotel=$estado_hotel;
					 $hotel_controller->cidade_hotel=$cidade_hotel;
					 $hotel_controller->cnpj_hotel=$cnpj_hotel;
					 $hotel_controller->endereco_hotel=$endereco_hotel;
					 $hotel_controller->categoria_hotel=$id_categoria;
					 $hotel_controller->wi_fi_hotel=$wi_fi;
					 $hotel_controller->aceita_animais=$aceita_animais;
					 $hotel_controller->estacionamento_hotel=$estacionamento;
					 $hotel_controller->spa_hotel=$spa;
					 $hotel_controller->pscina=$pscina;
					 $hotel_controller->academia=$academia;
					 $hotel_controller->cafe_da_manha=$cafe_da_manha;
					 $hotel_controller->almoco=$almoco;
					 $hotel_controller->cafe_da_tarde=$cafe_da_tarde;
					 $hotel_controller->jantar=$jantar;
					 $hotel_controller->telefone_hotel=$telefone_hotel;
					 $hotel_controller->bairro_hotel=$bairro_hotel;
					 $hotel_controller->numero_hotel=$numero_hotel;
					 $hotel_controller->restaurante=$restaurante;
					 $hotel_controller->foto=$destino;
					$hotel_controller->senha=$senha_hotel;

					 $id_hotel= $hotel_controller->Insert($hotel_controller);


					$i++;

				}





			}
		}
		 public function NovoQuarto(){
			if($_SERVER['REQUEST_METHOD']=='POST')
            {
				$nome_quarto=$_POST['txtNome'];
				$numero_quarto=$_POST['txtNumero'];
				$camas_solteiro=$_POST['txtCamas'];
				$camas_casal=$_POST['txtCamasCasal'];			
				
				$preco=$_POST['txtPreco'];
				$id_hotel=$_GET['id_hotel'];
				$i2= 0;

				foreach ($_FILES["arquivos2"]["error"] as $key => $error) {

				 $destino = "arquivos_parceiro/".$_FILES["arquivos2"]["name"]
				[$i2];

				 move_uploaded_file( $_FILES["arquivos2"]["tmp_name"][$i2],

				 $destino);
				 
				 $hotel_controller = new parceiro();
				 
				 $hotel_controller->nome_quarto=$nome_quarto;
				 $hotel_controller->numero_quarto=$numero_quarto;
				 $hotel_controller->camas_solteiro=$camas_solteiro;
				 $hotel_controller->camas_casal=$camas_casal;
			     $id_quarto=-1;	
				
				
				 $hotel_controller->preco_quarto=$preco;
				 $hotel_controller->id_hotel=$id_hotel;

				 $hotel_controller->foto_quarto=$destino;

     				$id_quarto = $hotel_controller->InsertQuarto($hotel_controller);

					$i2++;

				}
				
				
				$vetor_carac = $_POST['optC'];
				//var_dump($_POST['optC']);
				
				for($i3 = 0; $i3 < sizeof($vetor_carac); $i3++){
				$id_carac_quarto=$vetor_carac[$i3];
				
				$hotel_controller_carac = new parceiro();
				 
				 $hotel_controller_carac->id_carac_quarto=$id_carac_quarto;
				 
				 $hotel_controller_carac->InsertCaracQuarto( $id_quarto, $id_hotel);	
				 
				 //parceiro::InsertCaracQuartoT($hotel_controller_carac,$id_quarto );
					
					
					
					
				}
				
				
				 
			}
		 }
		public function ListarCategoria(){
			
			require_once('models/parceiro_class.php');
			$listCategoria = new parceiro;

			return $listCategoria -> SelectCategoria();
            
			
			
        }
	
		public function ListarQuartos(){
		
			require_once('models/parceiro_class.php');
			$listQuartos = new parceiro;

			return $listQuartos -> SelectQuartos();
		
		}
		public function BuscarInfoQuarto(){
				
			require_once('models/parceiro_class.php');
			$id_quarto=$_GET['id_quarto'];
			$hotel_controller = new parceiro;
			$hotel_controller->id_quarto=$id_quarto;

			return $hotel_controller -> BuscarInfoQuarto($hotel_controller);
			/*if($_SERVER['REQUEST_METHOD'] == 'GET'){
				

				$id_quarto=$_GET['id_quarto'];
				$hotel_controller = new parceiro();
				
				 $hotel_controller->id_quarto=id_quarto;
		    	
			    $listEditar=$hotel_controller->BuscarInfoQuarto( $hotel_controller);
				echo json_encode($listEditar);
			
			}*/
		
		}
		public function ListarCategoriaQuarto(){
			
			require_once('models/parceiro_class.php');
			$listCategoriaQuarto = new parceiro;

			return $listCategoriaQuarto -> SelectCategoriaQuarto();
		}		
		
   
		
	}





 ?>
