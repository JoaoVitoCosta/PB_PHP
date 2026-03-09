<?php

require_once "./database/Database.php";

class Biblioteca{
     public $titulo;
     public $autor;
     public $anoPublicacao;
     public $editora;

    public function __construct($titulo, $autor, $anoPublicacao, $editora){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->editora = $editora;
    }

   public function salvar(){
    $pdo = Database::conectar();
    $sql = "INSERT INTO Biblioteca (titulo, autor, anoPublicacao, editora) VALUES (:titulo, :autor, :anopublicacao, :editora)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'anoPublicacao' => $this->anoPublicacao, 'editora' => $this->editora]);
   }
   
    public static function listar(){
        return $_SESSION['Biblioteca'] ?? [];
    }

    public static function buscar($id){
        return $_SESSION['Biblioteca'][$id] ?? null;
    }

    public function atualizar($id){
        if(isset($_SESSION['Biblioteca'][$id])){
            $_SESSION['Biblioteca'][$id] = [
                'titulo' => $this->titulo,
                'autor' => $this->autor,
                'anoPublicacao' => $this->anoPublicacao,
                'editora' => $this->editora
            ];
        }
    }

    public function BibliotecaEditar(){
        $Biblioteca - Biblioteca::buscar($_GET['id']);
        require 'View/BibliotecaEditar.php';
    }
    public  static function excluir($id){
        if(isset($_SESSION['Biblioteca'][$id])){
            unset($_SESSION['Biblioteca'][$id]);
            }
    }

}
