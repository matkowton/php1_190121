<?php
//ex. 3

$cities = [
    'Московская обл.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская обл.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
];

function test($string) {
    strlen($string);
    return substr($string, 2, 1);
}

echo test('string');

//ex. 4


function transliterate(string $word):string {
    $dictionary = [
        'а'=> 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g'
    ];

}

echo transliterate('строка'); // stroka