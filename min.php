<?php
function myMin(...$args){
    $min = $args[0];
    if(count($args) == 1 && is_array($args[0])){
        $min = $min[0];
        $args = $args[0];
    }
    foreach ($args as $item) {
        if ($item < $min) {
            $min = $item;
        }
    }
    return $min;
}