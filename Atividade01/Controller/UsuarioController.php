<?php
// ESTOU NO ARQUIVO UsuarioController.php
session_start(); //"banco de dados"
require_once "./Model/UsuarioModel.php";
class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";

    }
    public function cadastrar(){
        $nomeDoProduto = $_POST['nomeDoProduto'];
        $valor = $_POST['valor'];
        $dataDeValidade = $_POST['dataDeValidade'];
        $quantidadeDisponivel = $_POST['quantidadeDisponivel'];

        $usuario = new Usuario ($nomeDoProduto, $valor, $dataDeValidade, $quantidadeDisponivel);
        $usuario->salvar();
        // redirecionar ao depois de salvar
        header('Location: /PB_PHP/Atividade01/usuario/telaCadastro');
        exit;
    }
    //ESTOU NO ARQUIVO UsuarioController.php
    public function listarUsuarios(){
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require "View/usuarioListar.php";
    }
    public function telaEditar(){
        $usuarios = Usuario::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
        
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST ['email']);
        $usuario->atualizar($_GET['id']);
        header('Location: /PB_PHP/Atividade01/usuario/telaEditar?id='.($_GET['id']));
        exit;

    }
public function excluir(){
    Usuario::excluir($_GET['id']);
    header ('Location:Location: /PB_PHP/Atividade01/usuario/listar');
    exit;
}
}

