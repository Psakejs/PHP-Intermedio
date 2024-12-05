<?php

function get_country_name_switch($country){
    $name = "";
    switch ($country){
        case "US":
            $name = "United States";
            break;

        case "CA":
            $name = "Canada";
            break;
        
        case "MX":
            $name = "Mexico";
            break;

        default:
            $name = "Unknown";
            break;        
    }
    return $name;
}

function get_country_name($country){
    return match($country){
        "US" => "United States",
        "CA" => "Canada",
        "MX" => "Mexico",
        default => "Unknown"
    };
}

echo get_country_name("US");