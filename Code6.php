
<?php
    
    $numeroN = 0;
        
    echo "Digite um número: ";
    fscanf(STDIN, "%d", $numeroN);
    
    if ( $numeroN > 0) {

        for ($i = 0; $i <= $numeroN; $i++) {
             echo $i . ",";
             $i++;
        }
    }
    else {
        $numeroN = -($numeroN);
        
        for ($i = 0; $i <= $numeroN; $i++) {
             echo $i . ",";
             $i++;
        }
    }
    
?>

