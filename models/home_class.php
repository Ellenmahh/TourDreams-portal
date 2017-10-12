<?php

  $listHome="";

    class home{





        //metodo construtor
        public function __construct(){

            //incluir o arquivo de conexao
            require_once('models/bd_class.php');
            //cria uma instancia da classe mysql_db
            $conexao_bd = new mysql_db();
            //estabelece a conexao com BD
            $conexao_bd->conectar();



        }

        //metodo para selecionar tudo do banco
         public function SelectALL(){
           //script de select no banco de dados
           $sql = "SELECT * FROM select_all_hotel_home;";
           $select = mysql_query($sql);
           $cont=0;

           //repetição para guardar os registros do banco de dados em array de objetos
           while ($rs=mysql_fetch_array($select)) {

             //instancia da classe contato, criando uma coleção de objetos
             $listHome[] = new home;

             //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
               $listHome[$cont]->nome_hotel=$rs['nome_hotel'];
               $listHome[$cont]->cidade_hotel=$rs['cidade_descricao'];
               $listHome[$cont]->imagem_hotel=$rs['imagem_hotel_1'];
               $listHome[$cont]->id_hotel=$rs['id_hotel'];

              $cont+=1;

           }

           return  $listHome;

        }
        public function SelectById($cliente){
          $sql = "select * from select_cliente where id_usuario = ".$cliente->id_cliente;
         $select = mysql_query($sql);

         //Verifica se existe algum registro no banco de dados.
         if($rs=mysql_fetch_array($select))
         {
             //Preenche o objeto com os dados provenientes do banco de dados.
             $cliente->nome_cliente = $rs['nome_usuario'];
             $cliente->foto_cliente = $rs['foto_usuario'];
             $cliente->cpf_cliente = $rs['cpf_usuario'];
             $cliente->cidade_cliente = $rs['cidade_descricao'];
             $cliente->estado_cliente = $rs['uf_descricao'];

             return $cliente;
         }




       }




    }

?>
