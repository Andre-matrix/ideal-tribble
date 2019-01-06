<?php

abstract class Animal {
    
    public function falar() {
        
        return "som";
        
    }
    
    public function mover() {
        
        return "andar";
        
    }
    
}

class Cachorro extends Animal {
    
    public function falar() {
        
        return "Latiu";
        
    }
}

class Gato extends Animal {
    
    public function falar() {
        
        return "Miou";
        
    }
}

class Passaro extends Animal {
    
    public function falar() {
        
        return "Canta";
        
    }
    
    public function mover() {
        //Polimorfismo
        return "Voar e " . parent::mover();
        
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';

$garfield = new Gato();
echo $garfield->falar() . '<br>';
echo $garfield->mover() . '<br>';

$ave = new Passaro();
echo $ave->falar() . '<br>';
echo $ave->mover() . '<br>';