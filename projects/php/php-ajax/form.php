<?php

$name = $_GET["name"];


$frameworks = [
    "Laravel",
    "Laravel2",
    "Symphony",
    "Symphony2",
    "Zend",
    "Zend2",
    "Cake PHP",
    "Cake PHP2",

];

$name = $_GET["name"];

$match = '';

if ( isset($name) && !empty($name) ) {
    foreach ( $frameworks as $item ) {
        
        if ( strtolower($name) == strtolower(substr( $item, 0, strlen($name) )) ) {

            if ( empty($match) ) {
                $match = $item;

            } else {
                $match = $match . ', ' . $item;
            }
        }
    }
} else {
    foreach ( $frameworks as $item) {
        if ( empty($match) ) {
            $match = $item;

        } else {
            $match = $match . ', ' . $item;
        }

    }
}

echo (empty($match)) ? "no matches" : $match;  