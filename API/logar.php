<?php

//CONEXÃO
	require_once('../models/bd_class.php');
	$conexao_bd = new mysql_db();
	$conexao_bd->conectar();

$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = "select * from tbl_usuario where email_usuario='".$email."' and senha_usuario=".$senha;
  $select =mysql_query($sql);
	if($rs = mysql_fetch_array($select)){
      echo json_encode(array("email"=>$email,"senha"=>$senha));
    //echo json_encode($rs);
    //echo $rs;

	}


/*
if($usuario = "teste" && $senha == "teste"){
  echo json_encode ("ok");
}else{
  echo json_encode ("erro");
}*/
//echo json_encode(array("email"=>$email,"senha"=>$senha));

 ?>
