<?php

/* 
 * Encapsulamento
 */

class Pessoa {
    
    public $nome = "André";
    protected $idade = 39;
    private $senha = "123456";
    
    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

class Programador extends Pessoa {
    
    public function verDados() {
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";//Não herda
    }
    
}

$obeto = new Programador();

echo $obeto->nome; //Todos vêm
//echo $obeto->idade; (mesma classe e classes filhas)
//echo $objeto->senha; (mesma classe)
$obeto->verDados();