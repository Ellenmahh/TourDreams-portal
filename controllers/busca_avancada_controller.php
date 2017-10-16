<?php
/*


Objetivo: Selecionar todos os htoéis automáticos e por pesquisa na página home.
data: 09/10/2017.
desenvolvedor: Vinicius Ivan Colutti.
última modificação:09/10/2017
observações: nd.
Arquivos relacionados: router.php, home_view.php, home_class.php.



*/

    class controllerBuscaAvancada{

        public function listar(){

            require_once('models/busca_avancada_class.php');


            $listBusca_controller = new busca();

            return $listBusca_controller->SelectALL();

        }

        public function pesquisa(){

            require_once('models/busca_avancada_class.php');


            if($_SERVER['REQUEST_METHOD'] == 'POST'){


                //Resgatando os valores do form
                $categoria=$_POST['categoria'];
                $caracteristica=$_POST['caracteristicas'];
                $busca=$_POST['busca'];




                $pesquisa_controller = new busca();

                $pesquisa_controller->categoria = $categoria;
                $pesquisa_controller->caracteristica = $caracteristica;
                $pesquisa_controller->busca = $busca;


                $pesquisa_controller->Pesquisa($pesquisa_controller);


            }

        }


        public function listar_categorias(){

            require_once('models/busca_avancada_class.php');


            $listBusca_controller = new busca();

            return $listBusca_controller->SelectCategorias();

        }
        public function listar_categorias_2(){

            require_once('models/busca_avancada_class.php');


            $listBusca_controller = new busca();

            return $listBusca_controller->SelectCategorias2();

        }

        public function listar_caracteristicas(){

            require_once('models/busca_avancada_class.php');


            $listBusca_controller = new busca();

            return $listBusca_controller->SelectCarac();

        }
        public function listar_caracteristicas_2(){

            require_once('models/busca_avancada_class.php');


            $listBusca_controller = new busca();

            return $listBusca_controller->SelectCarac2();

        }




    }

?>
