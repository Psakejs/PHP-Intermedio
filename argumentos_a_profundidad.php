<?php 

/**
 * The function `sumar_edades` in PHP calculates the sum of an array of ages.
 * 
 * @param array edades The `sumar_edades` function takes an array of ages as input and returns the sum of
 * those ages. By default, if no array is provided, it will calculate the sum of ages 13, 17, and 35.
 * 
 * @return int function `sumar_edades` is returning the sum of the ages provided in the array.
 */
function sumar_edades($edades=array(13,17,35)){
    return array_sum($edades);
}

echo sumar_edades();

/**
 * The function "multiplicar" in PHP multiplies three given numbers with default values of 1, 2, and 3
 * respectively.
 * 
 * @param int n1 1
 * @param int n2 The second parameter, , has a default value of 2 in the function multiplicar.
 * @param int n3 The third parameter in the `multiplicar` function is ``, which has a default value of 3
 * if not provided when calling the function.
 * 
 * @return int The function `multiplicar` returns the result of multiplying the three input parameters
 * ``, ``, and ``.
 */
function multiplicar(
    $n1=1,
    $n2=2,
    $n3=3,
){
    return $n1 * $n2 * $n3;
}

echo multiplicar(2, 3, 4);



class UnaClaseRandom{
    
}

/**
 * The function `receive_a_class` in PHP accepts an optional parameter of a class instance and echoes
 * out the class name.
 * 
 * @param string It looks like you are defining a function named `receive_a_class` with a default
 * parameter `` set to a new instance of a class named `UnaClaseRandom`. Inside the function, you
 * are trying to echo out the class name of the `` parameter.
 */
function receive_a_class($class = new UnaClaseRandom){
    echo $class::class;
}

receive_a_class();

function suma($n1=2,$n2){
    return $n1 + $n2;
}

echo suma(3, 3);




