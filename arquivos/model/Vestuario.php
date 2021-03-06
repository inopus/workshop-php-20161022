<?php
require_once 'Produto.php';

class Vestuario extends Produto{
	private $tamanho;
    private $sexo;
    
    function __construct($id, $nome, $qtdEstoque, $preco, $categoria, $imagem, $tamanho, $sexo){
        parent::__construct($id, $nome, $qtdEstoque, $preco, $categoria, $imagem);
		$this->tamanho = $tamanho;
        $this->sexo = $sexo;
	}
    
    function getTamanho(){
        return $this->tamanho;
    }
    
    function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }
    
    function getSexo(){
        return $this->sexo;
    }
    
    function setSexo($sexo){
        $this->sexo = $sexo;
    }


}