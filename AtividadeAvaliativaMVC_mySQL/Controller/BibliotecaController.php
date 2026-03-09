<?php
session_start();
require_once "./Model/BibliotecaModel.php";
class BibliotecaController{

    public function telaCadastro(){
        require "View/BibliotecaCadastrar.php";

    }
    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anoPublicacao = $_POST['anoPublicacao'];
        $editora = $_POST['editora'];
      

        $biblioteca = new Biblioteca ($titulo, $autor, $anoPublicacao, $editora);
        $biblioteca->salvar();
        header('Location: /PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaCadastrar');
        exit;
    }
    public function listarBiblioteca(){
        $Biblioteca = Biblioteca::listar();
        echo "<pre>";
        print_r($Biblioteca);
        echo "</pre>";
        require "View/BibliotecaListar.php";
    }

    public function telaEditar(){
        $Biblioteca = Biblioteca::buscar($_GET['id']);
        require 'View/BibliotecaEditar.php';
        
    }

    public function atualizar(){
        $Biblioteca = new Biblioteca($_POST['nome'], $_POST ['email']);
        $Biblioteca->atualizar($_GET['id']);
        header('Location: /PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaEditar?id='.($_GET['id']));
        exit;

    }
public function excluir(){
    Biblioteca::excluir($_GET['id']);
    header ('Location:Location: /PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaEditar');
    exit;
}
}