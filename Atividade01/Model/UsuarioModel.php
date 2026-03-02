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
public static function buscar ($id){
        return $_SESSION ['usuarios'][$id] ?? null;
    }

    public function atualizar ($id){
        if(isset($_SESSION['usuarios'][$id])){
            $_SESSION['usuarios'][$id] = [
                'nomeDoProduto' => $this->nomeDoProduto,
                'valor' => $this->valor,
                'dataDeValidade' => $this->dataDeValidade,
                'quantidadeDisponivel' => $this->quantidadeDisponivel
            ];
        }
    }

    public static function  excluir($id){
        if(isset($_SESSION['usuarios'][$id])){
            unset($_SESSION['usuarios'][$id]);
        }
    }


}



