<?php
    
    $numeroN = 0;
        
    echo "Digite um número: ";
    fscanf(STDIN, "%d", $numeroN);

        for ($i = 0; $i <= $numeroN; $i++) {
             echo $i . ",";
             $i++;
        }

?>
