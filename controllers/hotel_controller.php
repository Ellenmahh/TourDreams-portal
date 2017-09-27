<?php

    class ControllerHotel{
        
        //Metodo Inserir Novo Registro
        public function Novo(){
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
				$nome_hotel=$_POST['txtNomeHotel'];
				$email_hotel=$_POST['txtEmail'];
				$pais_hotel=$_POST['slcPais'];
				$CEP = $_POST['txtCEP'];
				$estado_hotel= $_POST['slcEstado'];
			}
		}







 ?>