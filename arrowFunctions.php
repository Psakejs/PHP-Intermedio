<?php 

$cajero = 0;

$add_cajero = fn($add) => $cajero += $add;

echo $add_cajero(100) . "\n";


$objeto="🎰";

$change_objeto= fn($new_objeto) => $objeto = $new_objeto;
echo $objeto;

echo $change_objeto("🎲") . "\n";