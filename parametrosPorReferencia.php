<?php 

$unicorn="🦄";

/**
 * The function `make_a_horse_run` takes a reference to a variable and updates it to contain a string
 * representing a running horse.
 * 
 * @param string unicorn The parameter `` is a reference to a variable that will be modified inside
 * the `make_a_horse_run` function.
 */

function make_a_horse_run(&$unicorn){
    $unicorn="🐴🐎🐎🐎🐎";
}

make_a_horse_run($unicorn);

echo $unicorn;