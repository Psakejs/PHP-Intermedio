<?php 

function calcular_area_triangulo(int $base, int $altura): int{
    return ($base * $altura) / 2;
}

echo calcular_area_triangulo(base: 10.2, altura: 2);

$variable = "edad";
$$variable = 14;
echo $edad;