<?php

class Carro {
    
    private $modelo;
    private $motor;
    private $ano;
    
    function getModelo() {
        return $this->modelo;
    }

    function getMotor():float {
        return $this->motor;
    }

    function getAno():int {
        return $this->ano;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setMotor($motor) {
        $this->motor = $motor;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
        
    }
            
}

$carro = new Carro();//Instanciação

$carro->setModelo("Astra");//Valor do atributo
$carro->setMotor("2.0");
$carro->setAno("2009");

//print_r($carro->exibir());
var_dump($carro->exibir());