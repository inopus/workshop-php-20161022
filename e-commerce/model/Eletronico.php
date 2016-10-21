<?php
require_once 'Produto.php';

class Eletronico extends Produto{
	private $voltagem;
    private $garantia;
    
    function __construct($voltagem, $garantia){
		$this->voltagem = $voltagem;
        $this->garantia = $garantia;
	}
    
    function getVoltagem(){
        return $this->voltagem;
    }
    
    function setVoltagem($voltagem){
        $this->voltagem = $voltagem;
    }
    
    function getGarantia(){
        return $this->garantia;
    }
    
    function setGarantia($garantia){
        $this->$garantia = $garantia;
    }
	
	function isBivolt(){
        if($this->$voltagem == 'BIVOLT'){
            return true;
        }else{
            return false;
        }
	}

}

?>