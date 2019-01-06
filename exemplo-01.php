<?php

class Pessoa {
    
    public $nome;
    
    public function falar() {
    
        return "O meu nome é " . $this->nome;
        
    }
    
}

$pessoa = new Pessoa();//Instanciação
$pessoa->nome = "André";//Valor do atributo
echo $pessoa->falar();//Invocação do método falar()