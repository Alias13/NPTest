<?php
function arr_reverse(array $arr){
$reversed = array();
    for ($i = 0; $i < count($arr); $i++){
        array_unshift($reversed, $arr[$i]);
    }
    return $reversed;
}
