<?php

// O PHP deve capturar os valores usando $_GET, calcular o IMC e exibir a
// classificação correspondente ("Baixo peso", "Peso adequado" ou "Sobrepeso")

    $altura = $_GET['altura'];
    $peso = $_GET['peso'];

    $imc = $peso * ($altura *$altura);

    if ($imc < 18.5) {
        echo "Abaixo do peso";
    }
    elseif ($imc > 18.5 && $imc <= 24.9) {
        echo "Peso normal";
    }
    else{
        echo "Sobrepeso";
    }

?>