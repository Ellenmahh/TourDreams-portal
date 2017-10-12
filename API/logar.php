<?php
$email = $_GET['email'];
$senha = $_GET['senha'];


if($usuario = "teste" && $senha == "teste"){
  echo json_encode ("ok");
}else{
  echo json_encode ("erro");
}
//echo json_encode(array("email"=>$email,"senha"=>$senha));

 ?>
