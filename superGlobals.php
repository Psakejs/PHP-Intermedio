<?php 

// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";


echo "<pre>";
print_r($_GET);
echo "</pre>";

function local_scope(){
    echo $_GET['name'];
}

local_scope();