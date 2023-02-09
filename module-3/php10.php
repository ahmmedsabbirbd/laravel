<?php 

// 10. Fixing function return type

function sum(int $x, int $y, int $z):int {
    // return 'show error';
    return $x + $y + $z;
}

echo sum(1, 2, 2);