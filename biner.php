<?php

function biner($num)
{
    if ($num > 1) {
        echo $num % 2;
        biner(intdiv($num, 2));
    }
}

biner(10);
