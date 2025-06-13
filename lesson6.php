<?php

//Индексированные массивы
$array1 = [1, 2, 3, 4, 5];
$array2 = ['red', 'blue', 'yellow', 'white', 'black'];

//Ассоциативные массивы
$array3 = [
    'name' => 'Beksultan',
    'age' => 18,
    'country' => 'Kazakstan',
    'city' => 'Astana',
];

$array4 = [
    'product' => 'Phone',
    'model' => 'Iphone',
    'year' => 2025,
    'price' => 500000
];

$array5 = [
    'brand' => 'Hyundai',
    'model' => 'Santa Fe',
    'year' => 2023,
    'drive' => 'AWD'
];

//Добавление элементов
$array1[] = 60;
$array1[] = 70;

$array3['country'] = 'Russia';
$array3['language'] = 'Kazakh';

//Удаление элементов

unset($array2[2]);
unset($array4['model']);

//Вывод

echo "Array 1:\n";
foreach ($array1 as $value) {
    echo $value . "\n";
}
echo "\n";

echo "Array 2:\n";
foreach ($array2 as $value) {
    echo $value . "\n";
}
echo "\n";

echo "Array 3:\n";
foreach ($array3 as $key => $value) {
    echo "$key => $value\n";
}
echo "\n";

echo "Array 4:\n";
foreach ($array4 as $key => $value) {
    echo "$key => $value\n";
}
echo "\n";

echo "Array 5:\n";
foreach ($array5 as $key => $value) {
    echo "$key => $value\n";
}
echo "\n";

