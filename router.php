<?php
$controller = '';
$modo = '';
    //verificar qual view está requisitando o router e qual ação a view quer executar (inserir, editar, excluir, etc)
    //essa informação é criad no action de cada form na view
$controller=$_GET['controller'];
$modo=$_GET['modo'];

//verificar qual controller devemos instanciar, essa informação e enviada na varíavel controller pela view
switch($controller){



      case'visualizar_quartos_hotel':
      require_once('controllers/visualizar_quartos_controller.php');
      require_once('models/visualizar_quartos_class.php');
      echo "string";
          switch ($modo) {
            case 'listar_quartos':
            echo "string2";
            $controller_quartos = new controllerQuartos();

            $controller_quartos->listar_quartos();
              # code...
              break;


          }
          case'busca':
          require_once('controllers/busca_avancada_controller.php');
          require_once('models/busca_avancada_class.php');

              switch ($modo) {
                case 'busca_avancada':

                $controller_busca = new controllerBuscaAvancada();

                $controller_busca->pesquisa();
                  # code...
                  break;


              }




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



        case'BuscarInfoHotel':

            $controller_usuario = new ControllerHotel();
            //chamando o metodo para selecionar um determinado usuario
            $controller_usuario-> buscarInfoHotel();
            break;

        case 'alterar_dados':

          $controller_usuario = new ControllerHotel();
          //chamando o método atualizar();
          $controller_usuario->atualizar();
          break;

		}

	case 'quarto':
		  require_once('controllers/quarto_controller.php');
          require_once('models/quarto_class.php');


		switch ($modo) {

		  case 'SelectCategoriaQuarto':
			$ControllerQuarto = new ControllerQuarto();
			$ControllerQuarto->ListarCategoriaQuarto();
			break;

		  case'NovoQuarto':
			$ControllerQuarto = new ControllerQuarto();
			$ControllerQuarto->NovoQuarto();
			break;

		}
    case 'fale_conosco':
    require_once('controllers/fale_conosco_controller.php');
      require_once('models/fale_class.php');

      switch($modo){

      case 'inserir_fale_conosco':
      $ControllerFale = new controllerFaleConosco();
      $ControllerFale->novofale();

      break;
    }




}

?>
