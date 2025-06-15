<?php

function calculateAverage($grades) {
    if (empty($grades)) {
        return "Grades array is empty";
    }

    $sum = array_sum($grades);
    $count = count($grades);
    $average = $sum / $count;

    return $average;
}

$grades = [1, 2, 3, 4, 5];
echo "Average: " . calculateAverage($grades);