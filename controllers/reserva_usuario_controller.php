<?php
/*


Objetivo: Reservas realizadas pelo usuário.
data: 25/10/2017.
desenvolvedor: Vinicius Ivan Colutti.
última modificação:25/10/2017
observações: nd.
Arquivos relacionados: reserva_view.php, reserva_class.php.



*/

    class controllerReserva{

        public function listar(){

            require_once('models/reserva_usuario_class.php');


            $listReserva_controller = new reserva_usuario();

            return $listReserva_controller->SelectALL();





        }




    }

?>
