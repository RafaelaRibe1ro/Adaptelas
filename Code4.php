<?php
    
    function inicio()
    {
        echo "Digite um numero: ";
        fscanf(STDIN, "%d", $A);
    
        echo "Digite outro numero: ";
        fscanf(STDIN, "%d", $B);
    
        divisao($A,$B);
    }
        inicio();
  
    function divisao($A, $B)
		{
		    if($A == 0 or $B == 0) {
		        echo "Impossível dividir por zero";
		    }
            else {
                $resultado = 0;
		        $resultado = $A / $B;
		        echo $resultado;
            }
		}
    
   
?>

