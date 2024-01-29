<?php
function sum($a)
{
    $sum = 0;
    for ($i = 0; $i < $a; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
        }
    }
    echo $sum;
}

sum(5);

// bai 3

