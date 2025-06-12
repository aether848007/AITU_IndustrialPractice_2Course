<?php

//Индексированные массивы

$array1 = [1,2,3,4,5];
$array2 = ['red', 'blue', 'yellow', 'white', 'black'];

//Асооциативные массивы

$array3 = [
    'name' => 'Beksultan',
    'age' => 18,
    'country' => 'Kazakstan',
    "city" => "Astana",
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

//Добавиление элементов

$array1[] = 60;
$array1[] = 70;

$array3['country'] = 'Russia';
$array3['language'] = 'Kazakh';

//Удаление по одному элементу

unset($array2[2]);
unset($array4['model']);

print_r($array1);
print_r($array2);
print_r($array3);
print_r($array4);
print_r($array5);
