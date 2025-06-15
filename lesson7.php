<?php

$students = [
    [
        'name' => 'Beksultan',
        'age' => 18,
        'subjects' => [
            ['name' => 'Math', 'grade' => 95],
            ['name' => 'Physics', 'grade' => 88],
        ]
    ],
    [
        'name' => 'Adil',
        'age' => 19,
        'subjects' => [
            ['name' => 'History', 'grade' => 82],
            ['name' => 'Literature', 'grade' => 90],
        ]
    ]
];

foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Subjects:<br>";
    foreach ($student['subjects'] as $subject) {
        echo "- " . $subject['name'] . ": " . $subject['grade'] . "<br>";
    }
    echo "<hr>";
}

$products = [
    [
        'name' => 'Headphones',
        'price' => 15000,
        'stock' => 25
    ],
    [
        'name' => 'Monitor',
        'price' => 85000,
        'stock' => 10
    ],
    [
        'name' => 'Keyboard',
        'price' => 12000,
        'stock' => 40
    ]
];

foreach ($products as $product) {
    echo "Product: " . $product['name'] . "<br>";
    echo "Price: " . $product['price'] . " KZT<br>";
    echo "In stock: " . $product['stock'] . " units<br>";
    echo "<hr>";
}

