<?php

    $pi = 3.14;
    $area = 0;
    $valor = 0;


    echo "Digite o valor do raio: ";
    fscanf(STDIN, "%d", $valor);

    $area = $pi * $valor * $valor;

    echo "\n" . $area ;

?>

