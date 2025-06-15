<?php

$month = date('n');

if ($month >= 3 && $month <= 5) {
    echo "Current season: Spring";
} elseif ($month >= 6 && $month <= 8) {
    echo "Current season: Summer";
} elseif ($month >= 9 && $month <= 11) {
    echo "Current season: Autumn";
} else {
    echo "Curent season is Winter";
}
