<?php
//declare(strict_types=1);


$x = 5;
$y = 7;

echo calculateAvg($x, $y) . "<br>";

$x = 3;
$y = 12;

echo calculateAvg($x, $y);

$x = 15;
$y = '17';

echo calculateAvg($x, $y);

function calculateAvg(?int $arg1, ?int $arg2): ?float {
        return ($arg1 + $arg2) / 2;
}

//5! = 5 * 4 * 3 * 2 * 1 | 5! = 5 * 4! | 4! = 4 * 3!
// n! = n * (n - 1)!
/*
function factorial(int $n): int {
    if($n < 2) {
        return $n;
    }
    return $n * factorial($n - 1);
}

var_dump(factorial(5));
*/

$a = 5;

$callback = function (?int $x) use ($a){
   return $x * $a;
};

$callback = fn(int $x) => $x * $a;

$result = getData($callback);

function getData(?callable $handler = null) {
    $data = 5;
    if(!is_null($handler)) {
        return $handler($data);
    }
    return $data;
}

/*
summ(2, 3, 5, 6, 7, 8 , 0, 7);

function summ (...$args) {
    $summ = 0;
    foreach ($args as $element) {
        $summ += $element;
    }
    return $summ;
}
*/