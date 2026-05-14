<?php 

    $animal = $_GET['animal'];
    $som = $_GET ['som'];
    $cor = isset($_GET ['cor']) ? $_GET ['cor'] : null;

    echo "Animal {$animal} <BR>";
    echo "Cor {$cor} <BR>";
    echo "Som {$som} <BR>";

?>