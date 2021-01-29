<?php
//ex. 3

$cities = [
    'Московская обл.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская обл.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
];


function transliterate(string $word): string
{
    $dictionary = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ы' => 'y',
        'э' => 'e',
        'ю' => 'iu',
        'я' => 'ia',
        'ь' => '',
        'ъ' => ''
    ];
    //$splitted = str_split($word, 1);
    $result = [];
    /* for($i = 0; $i < strlen($word); $i += 2){
         $char = $word[$i] . $word[$i + 1];
         $result[] = $dictionary[$char] ?? "";
     }*/

    /*for ($i = 0; $i < mb_strlen($word); $i += 1) {
        $char = mb_substr($word, $i, 1);
        $result[] = $dictionary[$char] ?? "";
    }*/

    $splitted =  preg_split('//u', $word, 0, PREG_SPLIT_NO_EMPTY);
    foreach ($splitted as $char ) {
        $result[] = $dictionary[$char] ?? "";
    }

    return implode($result);
}

var_dump(
    strlen('stroka'),
    strlen('строка')
);


echo transliterate('строка'); // stroka

