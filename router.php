<?php
$controller = '';
$modo = '';
    //verificar qual view está requisitando o router e qual ação a view quer executar (inserir, editar, excluir, etc)
    //essa informação é criad no action de cada form na view
$controller=$_GET['controller'];
$modo=$_GET['modo'];

//verificar qual controller devemos instanciar, essa informação e enviada na varíavel controller pela view
switch($controller){

      case'usuarios':
          //incluindo todos os arquivos necessários para a programação, no caso a controller e a model
          require_once('controllers/usuarios_controller.php');
          require_once('models/usuario_class.php');

          switch($modo){

              case'novo':
                  //instancia da classe controllerContatos
                  $controller_usuario = new controllerUsuarios();
                  //chamando o método novo();
                  $controller_usuario->novo();

                  break;


              /*case'editar':

                $controller_usuario = new controllerUsuarios();
                //chamando o metodo para selecionar um determinado usuario
                $controller_usuario->buscarAJAX();
                break;*/

              case'buscarAJAX':

                  $controller_usuario = new controllerUsuarios();
                  //chamando o metodo para selecionar um determinado usuario
                  $controller_usuario-> buscarAJAX();
                  break;


              case'excluir':

                $controller_usuario = new controllerUsuarios();
                //chamando o método excluir();
                $controller_usuario->apagar();
                break;


              case 'alterar_dados':

                $controller_usuario = new controllerUsuarios();
                //chamando o método atualizar();
                $controller_usuario->atualizar();
                break;
      }
	  case'hotel':
		 //incluindo todos os arquivos necessários para a programação, no caso a controller e a model
          require_once('controllers/hotel_controller.php');
          require_once('models/parceiro_class.php');
		 // echo 'estou no hotel';

        switch($modo){

		  case'Novo':
		 // echo 'estou no novo hotel';
                  //instancia da classe controllerContatos
                  $ControllerHotel = new ControllerHotel();
                  //chamando o método novo();
                  $ControllerHotel->Novo();
				  //echo 'estou no novo hotel PAPA';

                  break;

  	     case 'SelectCategoria':
  				$ControllerHotel = new ControllerHotel();
                    //chamando o método novo();



                    $ControllerHotel->ListarCategoria();

  				break;
				
		  case 'SelectCategoriaQuarto':
			$ControllerHotel = new ControllerHotel();
			$ControllerHotel->ListarCategoriaQuarto();
			break;
		
		  case'NovoQuarto':
			$ControllerHotel = new ControllerHotel();
			$ControllerHotel->NovoQuarto();
			break;
		}





}

?>
