<?php
function arr_chunk(array $array, $size) {
    if ($size > 0 && (is_int($size) || is_float($size) || is_string($size))) {
        $result = [];
        $ind  = 0;
        for ($i = 0; $i < count($array); $i++) {
            if ($i % $size === 0 && $i != 0) {
                $ind++;
            }
            $end = count(@$result[$ind]);
            $result[$ind][$end] = $array[$i];
        }
        return $result;
    }
    else {
        echo 'Введены некоректные данные';
        return NULL;
    }
}

