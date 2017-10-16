<?php

  $listBusca="";

    class busca{





        //metodo construtor
        public function __construct(){

            //incluir o arquivo de conexao
            require_once('models/bd_class.php');
            //cria uma instancia da classe mysql_db
            $conexao_bd = new mysql_db();
            //estabelece a conexao com BD
            $conexao_bd->conectar();



        }
        public function Pesquisa($pesquisa){
          echo ($pesquisa->busca);
          echo ($pesquisa->categoria);
          echo ($pesquisa->caracteristica);

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
             $listBusca[] = new busca;

             //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
               $listBusca[$cont]->nome_hotel=$rs['nome_hotel'];
               $listBusca[$cont]->cidade_hotel=$rs['cidade_descricao'];
               $listBusca[$cont]->imagem_hotel=$rs['imagem_hotel_1'];
               $listBusca[$cont]->id_hotel=$rs['id_hotel'];

              $cont+=1;

           }

           return  $listBusca;

        }

        public function SelectCategorias(){
          //script de select no banco de dados
          $sql = "select * from tbl_categoria order by id_categoria  asc limit 4;";
          $select = mysql_query($sql);
          $cont=0;

          //repetição para guardar os registros do banco de dados em array de objetos
          while ($rs=mysql_fetch_array($select)) {

            //instancia da classe contato, criando uma coleção de objetos
            $listCategoria[] = new busca;

            //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
              $listCategoria[$cont]->id_categoria=$rs['id_categoria'];
              $listCategoria[$cont]->nome_categoria=$rs['nome_categoria'];


             $cont+=1;

          }

          return  $listCategoria;

       }
       public function SelectCategorias2(){
         //script de select no banco de dados
         $sql = "select * from tbl_categoria order by id_categoria  desc limit 2;;";
         $select = mysql_query($sql);
         $cont=0;

         //repetição para guardar os registros do banco de dados em array de objetos
         while ($rs=mysql_fetch_array($select)) {

           //instancia da classe contato, criando uma coleção de objetos
           $listCategoria[] = new busca;

           //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
             $listCategoria[$cont]->id_categoria=$rs['id_categoria'];
             $listCategoria[$cont]->nome_categoria=$rs['nome_categoria'];


            $cont+=1;

         }

         return  $listCategoria;

      }

      public function SelectCarac(){
        //script de select no banco de dados
        $sql = "select * from caracteristicas_quarto order by id_carac_quarto  desc limit 6;";
        $select = mysql_query($sql);
        $cont=0;

        //repetição para guardar os registros do banco de dados em array de objetos
        while ($rs=mysql_fetch_array($select)) {

          //instancia da classe contato, criando uma coleção de objetos
          $listCarac[] = new busca;

          //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
            $listCarac[$cont]->id_carac=$rs['id_carac_quarto'];
            $listCarac[$cont]->descricao_carac=$rs['descricao_carac_quarto'];


           $cont+=1;

        }

        return  $listCarac;

     }

     public function SelectCarac2(){
       //script de select no banco de dados
       $sql = "select * from caracteristicas_quarto order by id_carac_quarto  asc limit 4;";
       $select = mysql_query($sql);
       $cont=0;

       //repetição para guardar os registros do banco de dados em array de objetos
       while ($rs=mysql_fetch_array($select)) {

         //instancia da classe contato, criando uma coleção de objetos
         $listCarac[] = new busca;

         //guardando em cada objeto um registro do banco de dados, referenciando pelo indece $cont
           $listCarac[$cont]->id_carac=$rs['id_carac_quarto'];
           $listCarac[$cont]->descricao_carac=$rs['descricao_carac_quarto'];


          $cont+=1;

       }

       return  $listCarac;

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
