<?php

    class controllerReservas{


        //Metodo Inserir Novo Registro
      public function Novo(){

        $id_usuario = $_GET['id_usuario'];


        if($id_usuario == ''){
          //echo "string";
          header('location:areaReserva.php?usuario_null&id_quarto='.$_GET['id_quarto']);





        }else {
          $data_entrada=$_POST['txt_entrada'];
          $data_saida=$_POST['txt_saida'];

          $data_inicial = '23/03/2009';
          $data_final = '04/11/2009';
          // Cria uma função que retorna o timestamp de uma data no formato DD/MM/AAAA
          function geraTimestamp($data) {
          $partes = explode('/', $data);
          return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
          }
          // Usa a função criada e pega o timestamp das duas datas:
          $time_inicial = geraTimestamp($data_entrada);
          $time_final = geraTimestamp($data_saida);
          // Calcula a diferença de segundos entre as duas datas:
          $diferenca = $time_final - $time_inicial; // 19522800 segundos
          // Calcula a diferença de dias
          $dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias

          $dias = $dias + 1;

          // A diferença entre as datas 23/03/2009 e 04/11/2009 é de 225 dias

          $data_entrada = implode("-",array_reverse(explode("/",$data_entrada)));
          $data_saida = implode("-",array_reverse(explode("/",$data_saida)));


          $id_quarto=$_GET['id_quarto'];

          $preco_quarto=$_GET['preco_quarto'];


          $valor_total = $dias * $preco_quarto;


          $reserva_controller = new reservas();
          $reserva_controller->data_entrada = $data_entrada;
          $reserva_controller->data_saida = $data_saida;
          $reserva_controller->id_quarto = $id_quarto;
          $reserva_controller->id_usuario = $id_usuario;
          $reserva_controller->total_dias = $dias;
          $reserva_controller->valor_total = $valor_total;


          $reserva_controller->Insert($reserva_controller);


      }


	}

}

 ?>
