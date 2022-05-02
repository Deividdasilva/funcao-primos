<?php 
    function numerosPrimos(int $inicial, int $final) :array
    {
        $numerosPrimos = [];
        $contador = 0;
        for($i = ($inicial + 1); $i < $final; $i++)
        {
            $divisores = 0;

            for($j = $i; $j >= 1; $j--)
            {
                if (($i % $j) == 0) {
                    $divisores++;
                }
            }
            
            if ($divisores == 2)
            {
               $numerosPrimos[$contador] = $i;
               $contador++;
            }
        }
        
        return $numerosPrimos;
    }
?>