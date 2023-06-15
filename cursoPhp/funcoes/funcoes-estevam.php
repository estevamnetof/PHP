<?php

function exibirSoma($a, $b) {
    echo $a + $b;
    echo "<br>";
}

function retornarSoma($a, $b) {
    return $a + $b;
}

function retornaSomaDefault($a, $b = 10) {
    return $a + $b;
}

function retornaArrayDeValores() {
    $arrayRetorno = ['Pêra', 'Uva', 'Maçã'];
    return $arrayRetorno;
}

?>