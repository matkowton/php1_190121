<?php
//Цикл с предусловием
/*
$i = 10;

while ($i < 10) {
    echo ++$i . "<br>";
}
*/

//Цикл с постусловием
/*
$i = 10;

do {
    echo ++$i . "<br>";
} while($i < 10);
*/
//Цикл со счетчиком

/*
for ($i = 0; $i < 10; $i++) {

    echo "<br>--------<br>";
    if ($i == 5) {
        continue;
    }
    echo $i;


}*/
/*
$array = [5, 4, 7, 23, 90, 143, 'kjhfjkh', [1, 5], new stdClass()];

$array[100] = 300;
$array[] = 123;
$array[] = 87897;


var_dump($array);
var_dump($ar*ray[2]);*/

$article = [
    'title' => 'Article',
    'content' => 'kljsdksdjklsdjklsdjkl',
    'date' => date('Y-m-d'),
    'author' => [
        'first_name' => 'Vasya',
        'last_name' => 'Pupkin'
    ],
];

foreach ($article as  &$value) {
     $value .= "11111111111";
}
unset($value);

var_dump($article);

$article2 = [
    'title' => 'Article2',
    'content' => '3433343434333434',
    'date' => date('Y-m-d'),
    'author' => [
        'first_name' => 'Petya',
        'last_name' => 'Vasechkin'
    ]
];

foreach ($article2 as $value) {
    $value .= "564654654654654";
}

var_dump($article2);
var_dump($article);