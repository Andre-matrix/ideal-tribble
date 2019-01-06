<?php

interface Veiculo {
    
    public function Acelerar($velocidade);
    public function Frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {
    
    
    public function Acelerar($velocidade) {
        
        echo 'O veículo acelerou até ' . $velocidade . ' km/h';
    }

    public function Frenar($velocidade) {
        
        echo 'O veículo frenou até ' . $velocidade . ' km/h';
        
    }

    public function trocarMarcha($marcha) {
        
        echo 'O veículo engatou a marcha ' . $marcha;
        
    }

}

?>