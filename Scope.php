<?php 

$outside_variable="Esta variable es externa 🐎🐴";

/**
 * The function `myFunction` in PHP accesses and echoes the value of a global variable named
 * ``.
 */
// function myFunction(){
//     global $outside_variable;
//     echo $outside_variable;
// }


// Otra manera de hacerlo:

/**
 * The function `myFunction` in PHP outputs the value of the global variable ``.
 */
function myFunction(){
    echo $GLOBALS['outside_variable'];
}

myFunction();