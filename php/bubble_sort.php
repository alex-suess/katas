<?php

function bubble_sort($array)
{
    $length = count($array);
    for ($j = 0; $j < $length; $length--) {
        for ($i = 0; $i < $length - 1; $i++) {
            $tmp = $array[$i + 1];
            if ($array[$i] > $tmp) {
                $array[$i + 1] = $array[$i];
                $array[$i] = $tmp;
            }
        }
    }
    return $array;
}

var_dump(bubble_sort([19, 5, 7, 13, 23, 5000, 88, 98, 152, 33, 1232]));