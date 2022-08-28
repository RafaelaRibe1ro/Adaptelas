<?php

    $idade = 0;
    $x = 86400;
    $idade_em_dias = 0;
    $idadex = 0;
    
    echo "Digite sua idade: ";
    fscanf(STDIN, "%d", $idade);
    
    $idade_em_dias = $idade * 365;
    $idadex = $x * $idade_em_dias;
    
    echo "\n" . $idadex;

?>
