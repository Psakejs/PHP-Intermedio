<?php 

define("MICHI","Mr.Michi");
// define("michi","otro Michi");

echo MICHI;
// echo michi;

const ANIMAL = "perro";

echo ANIMAL;

$desicion=true;

if($desicion){
    define("BLOCK_CONSTANT","Esta constante fue declarada dentro de un if");
    echo BLOCK_CONSTANT;
}

// Las const no se pueden declarar dentro de bloques de codigo
// if($desicion==1){
//     const BLOCK_CONSTANTE = "Esta constante fue declarada dentro de un if";
//     echo BLOCK_CONSTANTE;
// }


echo E_ERROR;

echo PHP_VERSION;

echo __LINE__;