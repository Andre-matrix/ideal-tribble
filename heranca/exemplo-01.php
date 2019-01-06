<?php

class Documento {
    
    private $numero;
    
    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

}

class CPF extends Documento {
    
    public function validar():bool {
        
        $numeroCPF = $this->getNumero();
        
        //vALIDAÇÃO DO cpf
        
        return TRUE;
    }
}

$doc = new CPF();
$doc->setNumero("16863111845");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();