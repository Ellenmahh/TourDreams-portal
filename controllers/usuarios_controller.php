<?php

class controllerUsuarios{

    //metodo para inserir um novo contato
    public function novo(){
        //Verifica se a requisição feita pelo form é utilizando o metodo POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){


            //Resgatando os valores do form
            $nome_usuario=$_POST['nome_usuario'];
            $cpf_usuario=$_POST['cpf_usuario'];
            $rg_usuario=$_POST['rg_usuario'];
            $email_usuario=$_POST['email_usuario'];
            $senha_usuario=$_POST['senha_usuario'];
            $telefone_usuario=$_POST['telefone_usuario'];
            $celular_usuario=$_POST['celular_usuario'];
            $email_usuario=$_POST['email_usuario'];
            //$foto_usuario=$_POST['foto_usuario'];
            $endereco_usuario=$_POST['endereco_usuario'];


            $usuarios_controller = new cadastroUsuario();

            $usuarios_controller->nome_usuario = $nome_usuario;
            $usuarios_controller->cpf_usuario = $cpf_usuario;
            $usuarios_controller->rg_usuario = $rg_usuario;
            $usuarios_controller->email_usuario = $email_usuario;
            $usuarios_controller->senha_usuario = $senha_usuario;
            $usuarios_controller->telefone_usuario = $telefone_usuario;
            $usuarios_controller->celular_usuario = $celular_usuario;
            $usuarios_controller->email_usuario = $email_usuario;
            //$usuarios_controller->foto_usuario = $foto_usuario;

            $usuarios_controller->Insert($usuarios_controller);


        }

    }
}

?>
