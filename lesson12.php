<?php

$words = ["Beksultan", "Dog", "Liger", "fish" ];

$filteredWords = array_filter($words, function($word) {
    return strlen($word) < 5;
});

print_r($filteredWords);