<?php
function aray_fill_keys(array $array, $values) {
   foreach($array as $key => $value) {
        $result[$array[$key]] = $values;
   }
   return $result;
}

