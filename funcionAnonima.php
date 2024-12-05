<?php 

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$numbers_by_2= array_map(function($current){
    return $current * 2;
}, $numbers);

echo "<pre>";
print_r($numbers_by_2);
echo "</pre>";


$horse="Im a horse";

$change_horse=function() use ($horse){
    $horse="Im a unicorn 🦄 no a fckin horse 👿";
    echo $horse;
};

echo $change_horse();



