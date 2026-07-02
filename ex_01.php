<?php

function calculadoraFormal($x, $y){

    if($x + $y ==0){ 
        return "não é possivel realizar a divisão pois a soma é igual a zero"
    }
    
    $resultado = ((pow($x,2)) + pow($y,2))/($x + $y);

    return $resultado;
} 

$x = 10;
$y = 5;

echo "Valor de x é: $x <br>";
echo "Valor de y é: $y <br><br>";

echo "Resultado: " . calculadoraFormal($x,$y);

?>