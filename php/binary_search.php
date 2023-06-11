<?php

function binary_search(array $array, int $value): int
{
    $low = 0;
    $high = count($array);
    while ($low < $high) {
        $mid = (int)floor(($high + $low) / 2);
        if ($value === $array[$mid]) {
            return $mid;
        }
        if ($value > $array[$mid]) {
            $low = $mid;
        }
        if ($value < $array[$mid]) {
            $high = $mid - 1;
        }
    }
    return -1;
}

echo binary_search([1, 4, 5, 6, 7, 12, 16, 20, 25, 100000, 3212323232], 25);
