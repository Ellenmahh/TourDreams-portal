<?php

function __construct(){
  require_once('../models/bd_class.php');
  $conexaoUser = new mysql_db();
  $conexaoUser->conectar();
}

$pesquisar = $_GET[''];

$sql_busca = "select h.id_hotel,
                     eh.id_hotel,
                     h.imagem_hotel_1,
                     h.nome_hotel,
                     eh.rua_hotel
                     from tbl_hotel as h
                     inner join
                     tbl_endereco_hotel as eh
                     on h.id_hotel = eh.id_hotel
                     where nome_hotel like '%$pesquisar%'";

$select = mysql_query($sql_busca);

$hotel = array();

	while($rs=mysql_fetch_array($select)){

		$hotel[]= array(
      "id_quarto"=>$rs['id_quarto'],
			"id_hotel"=>$rs['id_hotel'],
      "imagem_hotel_1"=>$rs['imagem_hotel_1'],
			"nome_hotel"=>$rs['nome_hotel'],
      "rua_hotel"=>$rs['rua_hotel']
			);
	}

	echo json_encode($hotel);


?>
