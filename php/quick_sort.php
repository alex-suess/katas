<?php

function quick_sort(array &$array, int $low, int $high)
{
    if (($high - $low) < 1) {
        return $array;
    }
    $partition = $low;
    for ($i = $low; $i < $high; $i++) {
        if ($array[$i] < $array[$high]) {
            $tmp = $array[$i];
            $array[$i] = $array[$partition];
            $array[$partition] = $tmp;
            $partition++;
        }
    }

    $tmp = $array[$partition];
    $array[$partition] = $array[$high];
    $array[$high] = $tmp;

    quick_sort($array, $low, $partition - 1);
    quick_sort($array, $partition + 1, $high);

    return $array;
}

$array = [10, 5, 4, 15];
var_dump(quick_sort($array, 0, 3));