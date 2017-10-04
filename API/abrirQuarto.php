<?php

require_once("../models/dados_quarto.php");
require_once("../models/caracteristicas.php");

/*
  $dadosQuarto = array("nome" => "Quarto tal" ,
                        "preco" => 200.00 ,
                        "caracteristicas" => array( "spa" => true , "hidro" => true  ),
                        "imagens" => array( "imagens/hotel1.jpg" , "imagens/hotel2.jpg" ,"imagens/hotel3.jpg")
                      );
*/


  $c = new caracteristicas();
  $c->descricao="spa";
  $c->possui = true;


    $c1 = new caracteristicas();
    $c1->descricao="hidro";
    $c1->possui = true;

  $dadosQuarto = new DadosQuarto();
  $dadosQuarto->nome =  "Quarto tal";
  $dadosQuarto->preco = 200.00 ;
  $dadosQuarto->caracteristicas = array( $c,  $c1 );
  $dadosQuarto->imagens = array( "imagens/hotel1.jpg" , "imagens/hotel2.jpg" ,"imagens/hotel3.jpg");

   echo json_encode($dadosQuarto);


 ?>
