<?php

function __autoload($nomeClasse) {
    //var_dump($nomeClasse);
    require_once("$nomeClasse.php");
    //var_dump($nomeClasse);
}

$carro = new DelRey();

$carro->Acelerar(80);

?>