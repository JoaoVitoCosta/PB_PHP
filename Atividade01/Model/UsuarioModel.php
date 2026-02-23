<?php

class Usuario{
    private $nomeDoProduto;
    private $valor;
    private $dataDeValidade;
    private $quantidadeDisponivel;

    public function __construct($nomeDoProduto, $valor, $dataDeValidade, $quantidadeDisponivel){
        $this->nomeDoProduto = $nomeDoProduto;
        $this->valor = $valor;
        $this->dataDeValidade = $dataDeValidade;
        $this->quantidadeDisponivel = $quantidadeDisponivel;
    }


    public function salvar(){
        if(!isset($_SESSION['usuarios'])){
            $_SESSION['usuarios'] = [];
        }

        
        $_SESSION['usuarios'][] = [
            'nomeDoProduto' => $this->nomeDoProduto,
            'valor' => $this->valor,
            'dataDeValidade' => $this->dataDeValidade,
            'quantidadeDisponivel' => $this->quantidadeDisponivel,
        ];
    }
    //ESTOU NA UsuarioModel.php
    public static function listar(){
        // retorna a lista de usuarios
        return $_SESSION['usuarios'] ?? [];
    }
}